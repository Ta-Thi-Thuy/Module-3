<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{
    public function index(){
        $cities = City::all();
        $cities_page = City::paginate(5);

        return view('cities.list', compact('cities','cities_page'));
    }

    public function create(){
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $city = new City();
        $city->name     = $request->input('name');
        $city->save();

        return redirect()->route('cities.list');

    }

    public function edit($id){
        $city = City::findOrFail($id);
        return view('cities.edit', compact('city'));
    }
    public function update(Request $request,$id){
         $city = City::findOrFail($id);
         $city->fill($request->all());
         $city->save();
         return redirect()->route('cities.list');
    }

    public function delete($id){
        $city = City::findOrFail($id);
        $city->delete();
        return redirect()->route('cities.list');

    }

//    public function search(Request $request)
//    {
//        $keyword = $request->input('keyword');
//        if (!$keyword){
//            return redirect()->route('cities.list');
//        }
//        //$customers = Customers::where('name','LIKE','%'.$keyword.'%')->paginate(5);
//        $cities_page = City::where('name','LIKE','%'.$keyword.'%')->paginate(5);
//
////        $cities = City::all();
//        Session::flash('search_result', true);
//
//        return view('cities.list', compact(  'cities_page'));
//    }
}
