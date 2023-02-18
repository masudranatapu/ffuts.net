<?php

namespace App\Http\Controllers\Frontend;

use DB;
use App\Models\Seo;
use App\Models\AdType;
use App\Models\AdGallery;
use Modules\Ad\Entities\Ad;
use function Sodium\compare;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Modules\Category\Entities\Category;
use Modules\Wishlist\Entities\Wishlist;
use Google\Service\Dfareporting\Country;
use Modules\Category\Entities\SubCategory;

class FrontendController extends Controller
{

    public function index()
    {


        $countries =  DB::table('country')->orderBy('name', 'asc')->get();
        $ad_types = AdType::orderBy('name', 'asc')->get();
        $coutry_iso = strtoupper(getCountryCode());

        $country = DB::table('country')->where('iso', $coutry_iso)->first();

        $cities = DB::table('city')->where('country_id', $country->id)->get();
        $seo = Seo::where('page_slug', 'home')->first();
        $meta_title = $seo->contents->title;
        $meta_description = $seo->contents->description;
        $meta_keywords = $seo->contents->keywords;
        $meta_image = $seo->contents->image;

        return view('frontend.index', compact('ad_types', 'countries', 'cities', 'meta_title', 'meta_description', 'meta_image', 'meta_keywords'));
    }

    public function setCountry(Request $request)
    {

        session()->put('local_country', strtolower($request->country));
        return redirect()->back()->with('success', 'Coutry change successfully');
    }



    public function search(Request $request)
    {
        $ad_type = AdType::where('slug', $request->ad_type)->first();
        $category = Category::where('slug', $request->categories)->first();
        if ($category) {
            $ads = Ad::where('ad_type_id', $ad_type->id)->where('category_id', $category->id)->get();
        } else {
            $ads = Ad::where('ad_type_id', $ad_type->id)->get();
        }

        return view('frontend.shop', compact('ads', 'ad_type', 'category'));
    }




    public function shop()
    {
        return view('frontend.shop');
    }

    public function details($slug)
    {
        $ad_details = Ad::with('ad_type')->where('slug', $slug)->first();
        // dd($ad_details->ad_type->slug);
        $ad_galleies = AdGallery::where('ad_id', $ad_details->id)->get();
        $seo = Seo::where('page_slug', 'home')->first();
        $meta_title = $seo->contents->title;
        $meta_description = $seo->contents->description;
        $meta_keywords = $seo->contents->keywords;
        $meta_image = $seo->contents->image;

        return view('frontend.details', compact('ad_details', 'ad_galleies', 'meta_title', 'meta_description', 'meta_keywords', 'meta_image'));
    }

    public function wishlistCreate(Request $request)
    {
        $id = $request->id;
        $user = $request->user;
        $isExist = Wishlist::where(['ad_id' => $id, 'user_id' => $user])->first();
        if (!$isExist) {
            $wishlist = new Wishlist();
            $wishlist->user_id = $user;
            $wishlist->ad_id = $id;
            $wishlist->save();
            if ($request->ajax()) {
                return response()->json(['status' => 'success', 'message' => 'Wishlist added successfully']);
            }

            $notification = trans('user_validation.Wishlist added successfully');
            $notification = array('messege' => $notification, 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $isExist->delete();
            if ($request->ajax()) {
                return response()->json(['status' => 'failed', 'message' => 'Wishlist removed successfully']);
            }
            $notification = trans('user_validation.Item already exist');
            $notification = array('messege' => $notification, 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
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
