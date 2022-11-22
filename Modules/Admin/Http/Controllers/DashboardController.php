<?php

namespace Modules\Admin\Http\Controllers;

use App\HelpersClass\Date;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Models\Admin\Admin;
use Modules\Admin\Models\Information\Information;
use Modules\Admin\Models\Visitor\Visitor;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Models\Article\Article;
use Modules\Admin\Models\Order\Order;
use Modules\Product\Models\Product;

class DashboardController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 

        //get ip address 
        $user_id_address = $request->ip();

        $early_last_month = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();

        $end_of_last_month = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();

        $early_this_month =  Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();

        $oneyears = Carbon::now('Asia/Ho_Chi_Minh')->subDay(365)->toDateString();

        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        //total visitors
        $visitors_all_count = Visitor::all()->count();
        //current online 
        $visitors_current = Visitor::where('ip',$user_id_address)->get();
        $visitor_count = $visitors_current->count();
        if($visitor_count < 1){
            $visitor = new Visitor();
            $visitor->ip = $user_id_address;
            $visitor->date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $visitor->save();
        }

        //total last month 
        $visitor_of_last_month = Visitor::whereBetWeen('date',[$early_last_month,$end_of_last_month])->get();

        $visitor_of_last_month_count = $visitor_of_last_month->count();

        // total this month 
        $visitor_of_this_month = Visitor::whereBetWeen('date',[$early_this_month,$now])->get();
        $visitor_of_this_month_count = $visitor_of_this_month->count();

        //total in one year
        $visitor_of_year = Visitor::whereBetWeen('date',[$oneyears,$now])->get();
        $visitor_of_year_count = $visitor_of_year->count();

        //get visitor
        $visitors = Visitor::select('date', DB::raw('count(*) as total'))->where('date', '>', today()->subMonth())->groupBy('date')->get();
        $chart_data = array();
        foreach ($visitors as $data)
        {
            array_push($chart_data, array($data->date->format('d.m.Y'), $data->total));
        }
        

        //product 
        $product = Product::all()->count();
        $article = Article::all()->count();
        $product_view = Product::all()->take(5);
        $bxhStaff = Admin::orderBy('turnover','DESC')->take(5)->get();
        // thống kê 1 xe có bao nhiêu người đặt xe trong 1 tháng
        $orders_month = DB::table('orders')
        ->select('o_product_id','products.pro_name',DB::raw('count(o_guest_id) as total_guest'))
        ->whereBetWeen('orders.created_at',[$early_this_month.' 00:00:00',$now.' 23:59:59'])
        ->whereIn('orders.o_status', [5])
        ->groupBy('o_product_id')
        ->rightJoin('products', 'orders.o_product_id', '=', 'products.id')
        ->rightJoin('users', 'orders.o_guest_id', '=', 'users.id')
        ->get();

        $orders_day = DB::table('orders')
        ->select('o_product_id','products.pro_name',DB::raw('count(o_guest_id) as total_guest'))
        ->where('orders.created_at','>=',Carbon::today('Asia/Ho_Chi_Minh')->toDateString())
        ->where('orders.o_status','=',5)
        ->groupBy('o_product_id')
        ->rightJoin('products', 'orders.o_product_id', '=', 'products.id')
        ->rightJoin('users', 'orders.o_guest_id', '=', 'users.id')
        ->get();

      


        $order_product_name = [];
        $order_total_guest = [];

        $order_product_name_now = [];
        $order_total_guest_now = [];

        foreach($orders_day as $value_day){
            if($value_day->pro_name !== null){
                array_push($order_product_name_now,$value_day->pro_name);
                array_push($order_total_guest_now,$value_day->total_guest);
            }
           
        }

        foreach($orders_month as $value){
            if($value->pro_name !== null){
                array_push($order_product_name,$value->pro_name);
                array_push($order_total_guest,$value->total_guest);
            }
        }
        //
        $listDay = Date::getListDayInMonth();
        // dd($listDay);

        // Tổng doanh thu
        $totalRevenue = Order::where('o_status',5)->sum('unified_price');
        // Lợi nhuận
        $totalGn = Product::all()->sum('pro_price_import');
        $totalGxc = Product::all()->sum('pro_price_repair');
        $totalLn = $totalRevenue - ($totalGn+$totalGxc);
        // chi phí
        $totalLasary = Admin::all()->sum('hard_salary');
        $totalCp = $totalGn+$totalGxc+$totalLasary;
        $target = Information::all()->sum('if_target');
        // bxh lượt đặt
        $abc = Order::selectRaw("count(o_product_id) as soluong ,id,o_product_id")->groupBy('o_product_id')->get();
        // doanh thu theo tháng
        $revenueTransactionMonth = Order::with(['product'])->select('o_product_id',DB::raw('DATE(orders.created_at) as date'),DB::raw('count(o_product_id) as total_product'))
        ->where('orders.o_status','=',5)
        ->whereMonth("orders.created_at",date("m"))
        ->groupBy('o_product_id','date')
        ->rightJoin('products', 'orders.o_product_id', '=', 'products.id')
        ->get()->toArray();


        // echo count($revenueTransactionMonth) - 1;die;
        $data_date_day =  $this->muti_day($revenueTransactionMonth);
        sort($data_date_day);

         $dd_data = [];
        foreach($data_date_day as $dd){
            array_push($dd_data,$dd);
        }
        $data_order_day = [];
        foreach($data_date_day as $d){
         

            $data_day_order =  Order::with(['product'])->select('o_product_id',DB::raw('count(o_product_id) as total_product'))
            ->where('orders.created_at', 'like', '%' .$d . '%')
            ->groupBy('o_product_id')
            ->rightJoin('products', 'orders.o_product_id', '=', 'products.id')
            ->get()->toArray();

           array_push($data_order_day,(object)[
            'key' => $d,
            "value" => $data_day_order
           ]);
        }

     
       
        $revenueCalculation= [];

        foreach($data_order_day as $key =>  $result){
            $totalPro = 0;
            foreach($result->value as $xx => $j){
                $totalPro = $totalPro + ($j["total_product"] * $j["product"]["pro_price"]);
            }
            array_push($revenueCalculation, $totalPro);
        }

        return view('admin::dashboard.visitor', compact(
            [
                'abc',
                'target',
                'totalCp',
                'totalLn',
                'totalRevenue',
                'bxhStaff',
                'visitors',
                'chart_data',
                'product',
                'article',
                'product_view',
                'visitor_count',
                'visitor_of_last_month_count',
                'visitor_of_this_month_count',
                'visitor_of_year_count',
                'visitors_all_count',
                'order_product_name',
                'order_total_guest',
                'order_product_name_now',
                'order_total_guest_now',
                'dd_data',
                'data_order_day',
                'revenueCalculation'
            ]));
        

    }

    public function muti_day($array = NULL){
        $dat = [];
     

        foreach($array as $data){
            $arr_day = $data['date'];
                array_push($dat, $arr_day);
        }
        return array_unique($dat);
    } // end func

    
}