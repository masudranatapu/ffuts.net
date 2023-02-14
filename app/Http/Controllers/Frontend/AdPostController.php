<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AdType;
use Modules\Ad\Entities\Ad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Category\Entities\Category;
use Modules\Category\Entities\SubCategory;

class AdPostController extends Controller
{
    //
    public function create($post_type=null,$category=null,$subcategory=null)
    {

        if($post_type == null){
            $add_types = AdType::orderBy('id', 'asc')->get();
            return view('frontend.post.step_one', compact('add_types'));
        }else{

            if($category){

                if($subcategory){
                    $ad_type = AdType::where('slug', $post_type)->first();
                    $category = Category::where('slug', $category)->first();
                    $subCategory = SubCategory::where('slug', $subcategory)->first();

                    return view('frontend.post.step_four',compact('ad_type','category','subCategory'));

                }else{
                    $ad_type = AdType::where('slug', $post_type)->first();
                    $category = Category::where('slug', $category)->first();
                    $subCategory = SubCategory::where('category_id', $category->id)->orderBy('id', 'desc')->get();
                    return view('frontend.post.step_three', compact('subCategory','category','ad_type'));

                }

            }else{
                $ad_type = AdType::where('slug', $post_type)->first();
                $category = Category::where('ad_type_id', $ad_type->id)->orderBy('id', 'desc')->get();
                return view('frontend.post.step_two', compact('category','ad_type'));
            }


        }


    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'city' => 'required|max:255',
            'postcode' => 'required|integer',
            'description' => 'required',
            'email' => 'required',
        ]);

        if ($request->ad_type_slug == 'job-wanted') {
            $request->validate([
                'availability' => 'required',
                'education' => 'required'
            ]);
        }
        // dd($request->all());

        $ad = new Ad();
        $ad->ad_type_id = $request->ad_type_id;
        $ad->category_id = $request->category_id;
        $ad->subcategory_id = $request->subcategory_id;
        $ad->title = $request->title;
        $ad->slug = str_slug($request->title);
        $ad->user_id = Auth::user()->id ?? 0;
        $ad->city = $request->city;
        $ad->postcode = $request->postcode;
        $ad->description = $request->description;
        $ad->employment_type = $request->employment_type;
        $ad->designation = $request->designation;
        $ad->job_title = $request->job_title;
        $ad->price = $request->price;
        $ad->company_name = $request->company_name;
        $ad->email_privacy = $request->email_privacy;
        $ad->show_phone = $request->show_phone ?? 0;
        $ad->phone_call = $request->phone_call;
        $ad->phone_text = $request->phone_text;
        $ad->phone = $request->phone;
        $ad->phone_2 = $request->phone_2;
        $ad->contact_name = $request->contact_name;

        // job wanted

        $ad->availability = $request->availability;
        $ad->education = $request->education;
        $ad->is_license = $request->is_license ?? 0;
        $ad->license_info = $request->license_info;
        $ad->other_contact = $request->other_contact ?? 0;
        $ad->save();

        dd($ad);

    }


}
