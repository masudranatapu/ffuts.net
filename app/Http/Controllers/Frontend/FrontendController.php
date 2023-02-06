<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }
    public function details()
    {
        return view('frontend.details');
    }

}
