<?php

namespace App\Http\Controllers\Frontend;

use DB;
use App\Http\Controllers\Controller;
use Google\Service\Dfareporting\Country;
use Modules\Category\Entities\Category;
use Modules\Category\Entities\SubCategory;

class FrontendController extends Controller
{

    public function index()
    {
        //  dd(app()->getLocale());
        // dd(session('set_lang'));

        $countries =  DB::table('country')->orderBy('name', 'asc')->get(); 
        $categories = Category::orderBy('name','asc')->get();
        return view('frontend.index',compact('categories', 'countries'));
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
