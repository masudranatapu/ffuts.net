<?php

namespace App\Http\Controllers\Frontend;

use DB;
use App\Models\Seo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Category\Entities\Category;
use Google\Service\Dfareporting\Country;
use Modules\Category\Entities\SubCategory;

use function Sodium\compare;

class FrontendController extends Controller
{

    public function index()
    {


        $countries =  DB::table('country')->orderBy('name', 'asc')->get();
        $categories = Category::orderBy('id', 'asc')->get();
        $coutry_iso = strtoupper(getCountryCode());

        $country = DB::table('country')->where('iso', $coutry_iso)->first();

        $cities = DB::table('city')->where('country_id', $country->id)->get();
        $seo = Seo::where('page_slug', 'home')->first();
        $meta_title = $seo->contents->title;
        $meta_description = $seo->contents->description;
        $meta_keywords = $seo->contents->keywords;
        $meta_image = $seo->contents->image;
        
        return view('frontend.index', compact('categories', 'countries', 'cities', 'meta_title', 'meta_description', 'meta_image', 'meta_keywords'));
    }

    public function setCountry(Request $request)
    {

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
        $seo = Seo::where('page_slug', 'home')->first();
        $meta_title = $seo->contents->title;
        $meta_description = $seo->contents->description;
        $meta_keywords = $seo->contents->keywords;
        $meta_image = $seo->contents->image;

        return view('frontend.details', compact('meta_title', 'meta_description', 'meta_keywords', 'meta_image'));
    }

    public function about()
    {
        $seo = Seo::where('page_slug', 'home')->first();
        $meta_title = $seo->contents->title;
        $meta_description = $seo->contents->description;
        $meta_keywords = $seo->contents->keywords;
        $meta_image = $seo->contents->image;
        return view('frontend.about', compact('meta_title', 'meta_description', 'meta_keywords', 'meta_image'));
    }

    public function termsCondition()
    {
        $seo = Seo::where('page_slug', 'home')->first();
        $meta_title = $seo->contents->title;
        $meta_description = $seo->contents->description;
        $meta_keywords = $seo->contents->keywords;
        $meta_image = $seo->contents->image;
        return view('frontend.terms_conditon', compact('meta_title', 'meta_description', 'meta_keywords', 'meta_image'));
    }

    public function privacyPolicy()
    {
        $seo = Seo::where('page_slug', 'home')->first();
        $meta_title = $seo->contents->title;
        $meta_description = $seo->contents->description;
        $meta_keywords = $seo->contents->keywords;
        $meta_image = $seo->contents->image;
        return view('frontend.privacy_policy', compact('meta_title', 'meta_description', 'meta_keywords', 'meta_image'));
    }
}
