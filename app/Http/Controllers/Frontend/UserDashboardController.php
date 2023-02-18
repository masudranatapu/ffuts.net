<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    //
    public function profile()
    {
        $user = Auth::user();
        return view('frontend.user.profile', compact('user'));
    }


    public function drafts()
    {
        $user = Auth::user();
        return view('frontend.user.drafts', compact('user'));
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

    public function userLogOut()
    {
        auth()->guard('user')->logout();

        return redirect()->route('index');
    }

}
