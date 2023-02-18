<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('user');
    }


    public function signIn()
    {
        return view('frontend.auth.login');
    }

    public function userSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);
        $verified = User::where('email', $request->email)->first();
        if (isset($verified) && isset($verified->email_verified_at)) {
            $user_pass_less = User::where('email', $request->email)->whereNull('password')->first();
            if ($user_pass_less) {
                Auth::guard('user')->login($user_pass_less);
                return redirect()->route('index')->with('success', 'You are sucessfully login');
            } else {
                $this->validate($request, [
                    'password' => 'required',
                ]);
                $user = User::where('email', $request->email)->first();
                if($user) {
                    if(Hash::check($request->password, $user->password)) {
                        Auth::guard('user')->login($user);
                        return redirect()->route('index')->with('success', 'You are sucessfully login');
                    }else {
                        return redirect()->back()->with('info', 'Password do not match');
                    }
                }else {
                    return redirect()->back()->with('error', 'User not found');
                }
            }
        } elseif($verified) {
            return redirect()->back()->with('error', 'Please verify your email');
        }




    }
}
