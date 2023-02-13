<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AdType;
use Illuminate\Http\Request;
use Modules\Category\Entities\Category;
use Modules\Category\Entities\SubCategory;

class AdPostController extends Controller
{
    //
    public function postType()
    {
        $add_types = AdType::orderBy('id', 'desc')->get();
        return view('frontend.post.step_one', compact('add_types'));
    }

    public function postStepTwo(Request $request)
    {
        $this->validate($request,[
            'ad_type' => 'required',
        ]);

        $ad_type = $request->ad_type;
        $add_types_category = Category::where('ad_type_id', $ad_type)->orderBy('id', 'desc')->get();
        return view('frontend.post.step_two', compact('add_types_category'));
    }
    public function postSubCategory(Request $request){

        $this->validate($request, [
            'category' => 'required',
        ]);
        
        $sub_category = $request->category;
        $post_types_subCategory = SubCategory::where('category_id', $sub_category)->orderBy('id', 'desc')->get();
        return view('frontend.post.sub-category', compact('post_types_subCategory'));
    }

    public function postStepThree()
    {
        return view('frontend.post.step_three');
    }
}
