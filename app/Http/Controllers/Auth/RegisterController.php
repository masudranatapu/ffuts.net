<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function userSignUp(Request $request)
    {
        dd($request->all());

        $user = User::where('email', $request->email)->get();

        if($user->count() > 0) {
            return redirect()->back()->with('info','Your email has already an account. Plase login to your account');
        }else {

            User::insert([
                'email' => $request->email,
                'token' => $request->_token,
                'created_at' => Carbon::now(),
            ]);

            $details = [
                'subject' => 'Welcome to '.' ' .config('app.name'),
                'greeting' => 'Hi you just register on'. ' ' .config('app.name'),
                'body' => 'Thanks for register '.' ' .config('app.name'),
                'email' => 'Your email is : ' . $user->email,
                'thanks' => 'Thank you and stay with '.' '. config('app.name'),
                'actionText' => 'Click Here to Verify',
                'actionURL' => route('user.verify', $user->_token),
                'site_url' => route('home'),
                'site_name' => config('app.name'),
                'copyright' => ' © '.' '.Carbon::now()->format('Y') . config('app.name') . ' ' . 'All rights reserved.',
            ];

            Mail::to($user->email)->send(new RegisterMail($details));

        }

    }

}
