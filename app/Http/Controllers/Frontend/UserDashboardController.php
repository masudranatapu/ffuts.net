<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\RegisterMail;
use Illuminate\Support\Str;
use Modules\Ad\Entities\Ad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserDashboardController extends Controller
{
    //
    public function profile()
    {
        $user = Auth::user();
        $ads = Ad::active()->where('user_id', $user->id)->get();
        return view('frontend.user.profile', compact('user', 'ads'));
    }



    public function drafts()
    {
        $user = Auth::user();
        $ads = Ad::pending()->where('user_id', $user->id)->get();
        return view('frontend.user.drafts', compact('user', 'ads'));
    }

    public function search()
    {
        $user = Auth::user();
        return view('frontend.user.search', compact('user'));
    }

    public function setting()
    {
        $user = Auth::user();
        return view('frontend.user.setting', compact('user'));
    }

    public function deletePost($id)
    {
        $ad = Ad::find($id);
        $ad->delete();
        return back()->withSuccess('Post deleted successfully');
    }
    public function statusUpdate($id, $status)
    {
        $ad = Ad::find($id);
        $ad->update([
            'status' => $status
        ]);
        if ($status == 'active') {
            return back()->with('message','Post published successfully');
        } else {
            return back()->with('error','Post unpublished successfully');
        }

    }
    public function passwordReset()
    {
        $user = User::find(Auth::id());
        $remembertoken = Str::random(40);

            $user->update([
                'remember_token' => $remembertoken,
            ]);

            $details = [
                'subject' => 'Welcome to ' . ' ' . config('app.name'),
                'greeting' => 'Hi, Your password reset link successfully sent.',
                'body' => 'Your requested password sent successfully done from ' . ' ' . config('app.name'). '. '. 'Now You can change your password from given the link.',
                'email' => 'Your email is : ' . $user->email,
                'thanks' => 'Thank you and stay with ' . ' ' . config('app.name'),
                'actionText' => 'Change Password',
                'actionURL' => route('user.password.reset', $remembertoken),
                'site_url' => route('frontend.index'),
                'site_name' => config('app.name'),
                'copyright' => ' © ' . ' ' . Carbon::now()->format('Y') . config('app.name') . ' ' . 'All rights reserved.',
            ];
            Mail::to($user->email)->send(new RegisterMail($details));

        return back()->with('message','A password reset mail sent to your email address.');

    }

    public function userLogOut()
    {
        auth()->guard('user')->logout();

        return redirect()->route('frontend.index');
    }
}
