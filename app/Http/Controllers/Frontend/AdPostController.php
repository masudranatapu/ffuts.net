<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\User;
use App\Models\AdType;
use App\Mail\RegisterMail;
use Illuminate\Support\Str;
use Modules\Ad\Entities\Ad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Modules\Category\Entities\Category;
use Modules\Category\Entities\SubCategory;

class AdPostController extends Controller
{
    //
    public function create($post_type = null, $category = null, $subcategory = null)
    {

        if ($post_type == null) {
            $add_types = AdType::orderBy('id', 'asc')->get();
            return view('frontend.post.step_one', compact('add_types'));
        } else {

            if ($category) {

                if ($subcategory) {
                    $ad_type = AdType::where('slug', $post_type)->first();
                    $category = Category::where('slug', $category)->first();
                    $subCategory = SubCategory::where('slug', $subcategory)->first();

                    return view('frontend.post.step_four', compact('ad_type', 'category', 'subCategory'));
                } else {
                    $ad_type = AdType::where('slug', $post_type)->first();
                    $category = Category::where('slug', $category)->first();
                    $subCategory = SubCategory::where('category_id', $category->id)->orderBy('id', 'desc')->get();
                    return view('frontend.post.step_three', compact('subCategory', 'category', 'ad_type'));
                }
            } else {
                $ad_type = AdType::where('slug', $post_type)->first();
                $category = Category::where('ad_type_id', $ad_type->id)->orderBy('id', 'desc')->get();
                return view('frontend.post.step_two', compact('category', 'ad_type'));
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
            'images' => 'required',
        ]);

        if ($request->ad_type_slug == 'job-wanted') {
            $request->validate([
                'availability' => 'required',
                'education' => 'required'
            ]);
        }


        if (!Auth::check()) {
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                $status = 'pending';
                $random_token = Str::random(40);
                $email = explode('@', $request->email);
                $username = $email[0] . '_' . random_int(1111, 9999);
                $user = User::create([
                    'email' => $request->email,
                    'username' => $username,
                    'token' => $random_token,
                    'created_at' => Carbon::now(),
                ]);

                $details = [
                    'subject' => 'Welcome to ' . ' ' . config('app.name'),
                    'greeting' => 'Hi you just post on' . ' ' . config('app.name'),
                    'body' => 'You have to verify your email to publish this post.',
                    'email' => 'Your email is : ' . $request->email,
                    'thanks' => 'Thank you and stay with ' . ' ' . config('app.name'),
                    'actionText' => 'Click Here to Verify',
                    'actionURL' => route('user.verify', $random_token),
                    'site_url' => route('frontend.index'),
                    'site_name' => config('app.name'),
                    'copyright' => ' © ' . ' ' . Carbon::now()->format('Y') . config('app.name') . ' ' . 'All rights reserved.',
                ];

                Mail::to($request->email)->send(new RegisterMail($details));
            }
        }
        // dd($request->all());
        $slug = Str::slug($request->title);
        $old_slug = Ad::where('slug', $slug)->first();
        $country = strtoupper(getCountryCode());

        $ad = new Ad();
        $ad->ad_type_id = $request->ad_type_id;
        $ad->category_id = $request->category_id;
        $ad->subcategory_id = $request->subcategory_id;
        $ad->country = $country;
        $ad->title = $request->title;
        $ad->slug = $slug;
        $ad->user_id = Auth::user()->id ?? $user->id;
        $ad->status = $status ?? 'active';
        $ad->city = $request->city;
        $ad->postcode = $request->postcode;
        $ad->description = $request->description;
        $ad->employment_type = $request->employment_type;
        $ad->services = $request->services;
        $ad->job_title = $request->job_title;
        $ad->price = $request->price;
        $ad->company_name = $request->company_name;
        $ad->email_privacy = $request->email_privacy;
        $ad->show_phone = $request->show_phone ?? 0;
        $ad->phone_call = $request->phone_call ?? 0;
        $ad->phone_text = $request->phone_text ?? 0;
        $ad->phone = $request->phone;
        $ad->phone_2 = $request->phone_2;
        $ad->contact_name = $request->contact_name;

        // job wanted

        $ad->availability = $request->availability;
        $ad->education = $request->education;
        $ad->is_license = $request->is_license ?? 0;
        $ad->license_info = $request->license_info;
        $ad->other_contact = $request->other_contact ?? 0;

        // House offered
        $ad->sqft = $request->sqft;
        $ad->houssing_type = $request->houssing_type;
        $ad->laundry = $request->laundry;
        $ad->parking = $request->parking;
        $ad->bedrooms = $request->bedrooms;
        $ad->bathrooms = $request->bathrooms;
        $ad->available_on = $request->available_on;

        // House wanted
        $ad->broker_fee = $request->broker_fee ?? 0;
        $ad->broker_fee_detailed = $request->broker_fee_detailed;
        $ad->application_fee = $request->application_fee ?? 0;
        $ad->application_fee_detailed = $request->application_fee_detailed;


        $ad->save();

        if ($old_slug) {
            $slug = $slug . '_' . $ad->id;
            $ad->update(['slug' => $slug]);
        }

        $images = $request->file('images');
        if ($images) {
            foreach ($images as $key => $image) {
                if ($key == 0 && $image && $image->isValid()) {

                    $url = uploadResizedImage($image, 'addss_image', 850, 650, false);
                    $ad->update(['thumbnail' => $url]);
                }

                if ($image && $image->isValid()) {

                    $url = uploadResizedImage($image, 'adds_multiple', 850, 650, false);
                    $ad->galleries()->create(['ad_id' => $ad->id, 'image' => $url]);
                }
            }
        }
        if ($ad->status == 'active') {
            flashSuccess('Post created successfully');
            return redirect()->route('frontend.index');
        } else {
            flashSuccess('Your Post is in drafted. Please verify email to publish this post.');
            return redirect()->route('signin');
        }
    }
}
