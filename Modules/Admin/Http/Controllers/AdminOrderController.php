<?php

namespace Modules\Admin\Http\Controllers;

use App\Mail\SendEmailCancelAppointmnet;
use App\Mail\SendEmailStaff;
use App\Mail\SendEmailSuccessPayment;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Modules\Admin\Http\Requests\RequestOrder;
use Modules\Admin\Models\Admin\Admin;
use Modules\Admin\Models\Order\Order;

class AdminOrderController extends AdminBaseController
{
    public function index(Request $request)
    {

        $sratDay = Carbon::now()->startOfDay();
        $endDay = Carbon::now()->endOfDay();

        $orderTodays =  Order::with(['product', 'user'])->where('created_at', '>=', $sratDay)->where('created_at', '<=', $endDay)->get();

        if(Auth::user()->role[0]->name  != 'administrator'){
            $orders = Order::with(['product', 'user'])->where('admin_id',Auth::user()->id)->orderBy('id', 'DESC')->paginate(10);
        }else{
            $orders = Order::with(['product', 'user'])->orderBy('id', 'DESC')->paginate(10);
        }

        $admins = Admin::with([
            'role' => function($q)
            {
                $q->select('id','name');
            }
        ])->get();

      

      
          
        $viewData = [
            'orders' => $orders,
            'orderTodays' => $orderTodays,
            'status'   => $this->getTextIndexAttribute(),
            'alphabet'   => config('bang_chu_cai'),
            'admins' => $admins
        ];

        return view('admin::order.index', $viewData);
    }

    public function deleteOrder(Request $request, $id)
    {
        $code = 0;
        if ($request->ajax()) {
            $article = Order::findOrFail($id);
            $article->delete();

            $code = 1;
        }

        \File::deleteDirectory(storage_path('framework/cache'));

        return \response([
            'code'      => $code,
        ]);
    }

    public function edit($id)
    {
        $orders = Order::with('product', 'user')->find($id);

        $viewData = [
            'orders'   => $orders,
            'status'   => $this->getTextIndexAttribute()
        ];

        return view('admin::order.update', $viewData);
    }

    public function update(RequestOrder $requestOrder, $id)
    {

        $order = Order::find($id);

        try {
            $order->o_status               = $requestOrder->o_status;
            $order->save();

            \Session::flash('toastr', [
                'type'    => 'success',
                'message' => 'Cập nhật thành công !!!'
            ]);

            return redirect()->route('get.list.orders');
        } catch (\Exception $e) {
            \Log::error('[Order Error ]' . $e->getMessage());

            \Session::flash('toastr', [
                'type'    => 'errors',
                'message' => 'Cập nhật thất bại'
            ]);
            return redirect()->back();
        }
    }


    public function selectStatusOrder(Request $request, $id)
    {

        if ($request->ajax()) {
            $order = Order::find($id);

            $order->o_status = $request->status;


            $order->save();
            $code = 1;

            return \response([
                'code'      => $code,
                'active'    => $order->o_status
            ]);
        }
    }

    public function staff(Request $request)
    {

        if ($request->ajax()) { 
            $email = Admin::where('id',$request->admin_id)->get();
            
            $order = Order::find($request->id);

            $order_detail =Order::find($request->id);
  

            $order->admin_id = $request->admin_id;

            $order->save();
            $code = 1;

            try{
                
                Mail::to($email[0]->email)->send(new SendEmailStaff(compact('order_detail','email')));          
    
            }catch (\Exception $e)
            {

                \Log::error("[Send Email Errors Guest] ".$e->getMessage());
            };

            
            return \response([
                'code'      => $code,
                'active'    => $order->admin_id
            ]);
        }
    }

    public function carViewingDay(Request $request)
    {
        if ($request->ajax()) {

            $order = Order::find($request->id);

            $order->o_pick_up_schedule = $request->o_pick_up_schedule;
            $order->o_status = 4;

            $order->save();
            $code = 1;

            return \response([
                'code'      => $code,
                'active'    => $order->o_pick_up_schedule
            ]);
        }
    }

    public function cancelDoNotBuyAnymore(Request $request){
    if ($request->ajax()) {

        $order = Order::find($request->id);

        $order->cancel_appointment = $request->cancel_appointment;
        $order->o_status = 6;
        $order->save();
        $code = 1;

        return \response([
            'code'      => $code,
            'active'    => $order->cancel_appointment
        ]);
    }
    }
    
    public function cancelAppointment(Request $request)
    {
        if ($request->ajax()) {

            $order = Order::find($request->id);

            $order->cancel_appointment = $request->cancel_appointment;
            $order->o_status = 3;
            $order->save();
            $code = 1;

       
            $data = [
                'lydohuy' =>  $request->cancel_appointment,
                'name' =>  $order->user->name,
                'email' => $order->user->email,
            ];


            try{
                
                Mail::to($order->user->email)
                ->send(new SendEmailCancelAppointmnet($data));          
    
            }catch (\Exception $e)
            {
                \Log::error("[Send Email Errors Guest] ".$e->getMessage());
            };


            return \response([
                'code'      => $code,
                'active'    => $order->cancel_appointment
            ]);
        }
    }


        
    public function successPayment(Request $request)
    {
        if ($request->ajax()) {

            $order = Order::find($request->id);

            $order->o_status = 5;
            $order->save();
            $code = 1;

       
            $data = [
                'name' =>  $order->user->name,
                'email' => $order->user->email,
            ];


            try{
                
                Mail::to($order->user->email)
                ->send(new SendEmailSuccessPayment($data));          
    
            }catch (\Exception $e)
            {
                \Log::error("[Send Email Errors Guest] ".$e->getMessage());
            };


            return \response([
                'code'      => $code,
                'active'    => $order->o_status
            ]);
        }
    }



    public function deposit(Request $request)
    {
        if ($request->ajax()) {

            $order = Order::find($request->id);

            $order->o_deposit = $request->deposit;
            $order->o_status = 2;

            $order->save();
            $code = 1;

            return \response([
                'code'      => $code,
                'active'    => $order->o_deposit,
                'o_status' => $order->o_status
            ]);
        }
    }

    public function unifiedPrice(Request $request)
    {
        if ($request->ajax()) {

            $order = Order::find($request->id);

            $order->unified_price = $request->unified_price;


            $order->save();
            $code = 1;

            return \response([
                'code'      => $code,
                'unified_price'    => $order->unified_price,

            ]);
        }
    }

    public function getTextIndexAttribute()
    {
        return config('setting.status');
    }

    public function previewOrderUser(Request $request, $id)
    {
        if ($request->ajax())
        {
            $orders = Order::with([
                'product' => function($product)
                {
                    $product->select('id','pro_name');
                },
                'menu' => function($menu)
                {
                    $menu->select('id','m_title');
                }
            ])->where('o_guest_id',$id)->orderBy('created_at','DESC')->get();

            $status = config('setting.status');
            $orderHTML =  view('admin::common.modal.preview_order',compact('orders','status'))->render();

            return \response([
                'data' => $orderHTML
            ]);

        }

    }

    public function previewPrint(Request $request){
   
        if ($request->ajax())
        {

            $orderHTMLPrint =  view('admin::common.modal.preview_info_contract')->render();

            return \response([
                'data' => $orderHTMLPrint
            ]);
        }
          
    }

    public function previewUpdateOrder(Request $request,$id){
        if ($request->ajax())
        {
       
            $orders = Order::with('product', 'user')->find($id);

            $status = config('setting.status');
            $link_deposit = $request->deposit_url;
            $link_print = $request->print_url;
            $orderHTML =  view('admin::common.modal.preview_order_update',compact('orders','status','link_deposit','id','link_print'))->render();

            return \response([
                'data' => $orderHTML
            ]);
        }

        
    }
}
