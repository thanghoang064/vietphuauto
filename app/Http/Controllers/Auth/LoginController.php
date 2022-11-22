<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;
use App\Rules\Captcha; 
class LoginController extends FrontendController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function login()
    {

        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {


        $request->validate([
            'g-recaptcha-response' => new Captcha()
        ]);

        $credentials = $request->except('_token','g-recaptcha-response');

        if (\Auth::guard('web')->attempt($credentials)) {
            return redirect()->to('/');
        }
        return redirect()->back()->with('error','Thông tin không đúng');
    }

    public function logout()
    {
        \Auth::guard('web')->logout();
        return redirect()->route('get.index');
    }
}
