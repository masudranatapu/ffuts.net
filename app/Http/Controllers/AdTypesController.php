<?php

namespace App\Http\Controllers;

use App\Models\AdType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;


class AdTypesController extends Controller
{
    public function index(){

        $ad_types = AdType::orderBy('id','desc')->get();
        return view('admin.ad-types.index', compact('ad_types'));
    }

    public function create(){
        return view('admin.ad-types.create');
    }

    public function store(Request $request)
    {
    
        $this->validate($request, [
            'name'  => 'required|unique:ad_types,name',
        ]);
        DB::beginTransaction();
        try {

            $ad_type = new AdType();
            $ad_type->name = $request->name;
            $ad_type->slug = Str::slug($request->name);
            $ad_type->save();
        } catch (\Exception $e) {
            DB::rollback();
            flashSuccess('Data not Created');
            return redirect()->route('adtypes.index');
        }
        DB::commit();
        flashSuccess('Data Created Successfully');
        return redirect()->route('adtypes.index');
    }

    public function edit($slug)
    {
        // dd($id);
        $ad_type = AdType::where('slug', $slug)->first();
        $html = view('admin.ad-types.edit', compact('ad_type'))->render();
        return response()->json($html);
    }



    
}
