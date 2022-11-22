<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\GuestRequest;
use App\Mail\SuccessInfoEmail;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Admin\Models\Information\Information;
use Modules\Admin\Models\Order\Order;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;
class GuestController extends Controller
{
    public function saveEmailGuest(Request $request)
    {
        if ($request->ajax())
        {
            $id_guest   = '';
            $flag       = true;

            $email = $request->email;

            if ($email)
            {
                $guest = User::where('email',$email)->first();

                if ($guest)
                {
                    $flag     = false;
                    $id_guest = $guest->id;
                }
            }

            if ($flag == true)
            {
                if ($flag = true)
                {
                    $id_guest = $this->insertGuest($request->name,$email,$request->phone);

                }

                $this->insertOrder($id_guest,$id = 0,$messages='', $car_viewing_day= NULL);
            }

            $this->sendEmailAdmin($request->name,$email,$request->phone,$messages='');

            return response(['code' => 1]);
        }

    }

    public function saveInfoFooterGuest(Request $request)
    {
        $code = 1;

        if ($request->ajax())
        {
            $flag  = true;
            $email = trim(mb_strtolower($request->email));
            $phone = $request->phone;
            $name  = $request->name;
            $id    = $request->product;
            $id_guest = '';

         

            if (Auth::check()) {
              
                $user = Auth::user();
                $id_guest = $user->id;
                $flag     = false;
            } else {
           
                $guest = User::where('email',$email)->first();

                if ($guest)  {
                    $flag     = false;
                    $id_guest = $guest->id;
                }
            }

            if ($flag == true)
            {
                $id_guest = $this->insertGuest($email,$name,$phone);
            }


            $ip = ip_user_client();
            Order::insert([
                'o_guest_id'    => $id_guest,
                'o_menu_id'     => $id,
                'o_ip'          => $ip,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);

            $this->sendEmailAdmin($request->name,$email,$request->phone,$messages='');

        }

        return response(['code' => $code]);
    }

    public function saveInfoGuest(Request $request)
    {
        $code = 1;

        if ($request->ajax())
        {
            $flag = true ;
            $email = trim(mb_strtolower($request->email));
            $phone = $request->phone;
            $name  = $request->name;
            $car_viewing_day = $request->car_viewing_day;
            $messages = $request->messages;

            $id    = $request->id;
            $id_guest = '';

            if (Auth::check()) {
                $user = Auth::user();
                $id_guest = $user->id;
                $flag     = false;
            } else {
                $guest = User::where('email',$email)->first();

                if ($guest)  {
                    $flag     = false;
                    $id_guest = $guest->id;
                }
            }

            if ($flag == true)
            {
                $id_guest = $this->insertGuest($email,$name,$phone);
            }

            $this->insertOrder($id_guest, $id, $messages, $car_viewing_day);
            $this->sendEmailAdmin($request->name,$email,$request->phone,$messages='');

            $options = array(
                'cluster' =>  env('PUSHER_APP_CLUSTER'),
                'encrypted' => true
            );
    
            $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                $options
            );

       

            $data['name'] = $request->name;
            $data['email'] =trim(mb_strtolower($request->email));
            $data['phone'] = $request->phone;
            $pusher->trigger('Notify', 'send-message', $data);
        }

        return response(['code' => $code]);
    }

    public function insertGuest($email,$name,$phone)
    {
        return $id_guest  = User::insertGetId([
                'name'          => $name,
                'email'         => $email,
                'phone'         => $phone,
                'password'      => bcrypt('123456789'),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
    }

    public function insertOrder($id_guest,$id=0,$messages='', $car_viewing_day)
    {

     
        $ip = ip_user_client();
        Order::insert([
            'o_guest_id'    => $id_guest,
            'o_product_id'  => $id,
            'o_ip'          => $ip,
            'o_messages'    => $messages,
            'car_viewing_day'    => $car_viewing_day,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
    }

    public function sendEmailAdmin($name='',$email='',$phone='',$messages='')
    {
        $info           =  Information::first();
        $email_to_admin = $info->if_email;
        
        $data = [
            'email' => $email,
            'phone' => $phone,
            'name'  => $name
        ];

        try{
            Mail::to($email_to_admin)
                ->send(new SuccessInfoEmail($data));
                return redirect()->back()->with('success', 'Email đã gửi thành công <3');
        }catch (\Exception $e)
        {
            \Log::error("[Send Email Errors Guest] ".$e->getMessage());
        }
    }
}
