<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLang(Request $request){
        App::setLocale($request->language);
        Session::put('locale', $request->language);
        return redirect()->back()->with('success', 'language change successfully');
    }
}
