<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Category\Entities\Category;
use Modules\Category\Entities\SubCategory;

class FrontendController extends Controller
{

    public function index()
    {
        //  dd(app()->getLocale());
        // dd(session('set_lang'));

        $categories = Category::orderBy('name','asc')->get();
        return view('frontend.index',compact('categories'));
    }

    public function setCountry(Request $request){

        session()->put('local_country', strtolower($request->country));
        return redirect()->back()->with('success', 'Coutry change successfully');
    }



    public function search(Request $request)
    {
        return view('frontend.shop');
    }




    public function shop()
    {
        return view('frontend.shop');
    }

    public function details()
    {
        return view('frontend.details');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function termsCondition(){
        return view('frontend.terms_conditon');
    }

    public function privacyPolicy(){
        return view('frontend.privacy_policy');
    }


}
