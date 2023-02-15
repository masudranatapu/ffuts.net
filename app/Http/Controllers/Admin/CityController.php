<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index(){
       
        $cities = DB::table('city')->orderBy('name','asc')->paginate(8);
        
        return view('admin.city.index',compact('cities'));
    }

    public function create()
    {
        $countries = DB::table('country')->orderBy('name','asc')->get();
        return view('admin.city.create',compact('countries'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name'  => 'required',
            'country_id'  => 'required',
            'order_id'  => 'required',
            'status'  => 'required',
        ]);
        DB::beginTransaction();
        try {

            $city = new City();
            $city->name = $request->name;
            $city->slug = Str::slug($request->name);
            $city->country_id = $request->country_id;
            $city->order_id = $request->order_id;
            $city->status = $request->status;
            $city->save();
        } catch (\Exception $e) {
            DB::rollback();
            flashSuccess('Data not Created');
            return redirect()->route('city.index');
        }
        DB::commit();
        flashSuccess('Data Created Successfully');
        return redirect()->route('city.index');
    }

    public function edit($slug)
    {
        $city = City::where('slug', $slug)->first();
        $country = DB::table('country')->orderBy('name', 'asc')->get();
        return view('admin.city.edit', compact('city', 'country'));
    }

    public function update(Request $request, $slug)
    {
        $this->validate($request, [
            'name'  => 'required',
            'country_id'  => 'required',
            'order_id'  => 'required',
            'status'  => 'required',
        ]);
        DB::beginTransaction();
        try {
            $city = City::where('slug', $slug)->first();
            $city->name = $request->name;
            $city->slug = Str::slug($request->name);
            $city->country_id = $request->country_id;
            $city->order_id = $request->order_id;
            $city->status = $request->status;
            $city->save();
        } catch (\Exception $e) {
            DB::rollback();
            flashSuccess('Data not Updated');
            return redirect()->route('city.index');
        }
        DB::commit();
        flashSuccess('Data Updated Successfully');
        return redirect()->route('city.index');
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
        $city = City::find($id);
        $city->delete();

        } catch (\Exception $e) {
            DB::rollback();
            flashSuccess('Data not Deleted');
            return redirect()->route('city.index');
        }
        DB::commit();
        flashSuccess('Data Deleted Successfully');
        return redirect()->route('city.index');
    }
}
