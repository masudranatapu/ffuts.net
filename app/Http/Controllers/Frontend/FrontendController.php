<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use Google\Service\Dfareporting\Country;
use Modules\Category\Entities\Category;
use Modules\Category\Entities\SubCategory;

class FrontendController extends Controller
{

    public function index()
    {


        $countries =  DB::table('country')->orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name','asc')->get();
        $coutry_iso = strtoupper(getCountryCode());

        $country = DB::table('country')->where('iso', $coutry_iso)->first();

        $cities = DB::table('city')->where('country_id',$country->id)->get();

        return view('frontend.index',compact('categories', 'countries','cities'));
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
