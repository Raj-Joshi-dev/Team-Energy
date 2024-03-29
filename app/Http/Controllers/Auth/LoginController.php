<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

//    /**
//     * The user has been authenticated.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  mixed  $user
//     * @return mixed
//     */
//    protected function authenticated(Request $request, $user)
//    {
//        $user->update([
//            'last_login_at' => Carbon::now()->toDateTimeString(),
//            'last_login_ip' => $request->getClientIp()
//        ]);
//    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectPath()
    {
        if (auth()->user()->is_admin) {
            return route('admin.users.index');
        }

        return route('dashboard');
    }
}
