<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomersExampleRequest;
use App\Models\City;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CustomersController extends Controller
{

    public function index(){
//        $customers = Customers::all();
        $cities = City::all();
       // $customers_page = DB::table('customers')->paginate(5);
        $customers_page = Customers::paginate(5);

        return view('customers.list',compact('cities','customers_page'));

    }
    public function create(){
        $cities = City::all();
        return view('customers.create', compact('cities'));
    }

    public function store(CustomersExampleRequest $request){
        $customer = new Customers();
        $customer->name     = $request->input('name');
        $customer->email    = $request->input('email');
        $customer->dob      = $request->input('dob');
        $customer->city_id  = $request->input('city_id');
        $customer->save();
        return redirect()->route('customers.list');
    }

    public function edit($id){
        $customer = Customers::findOrFail($id);
        $cities = City::all();

        return view('customers.edit', compact('customer', 'cities'));
    }


    public function update(Request $request, $id){
        $customer = Customers::findOrFail($id);
        $customer->name     = $request->input('name');
        $customer->email    = $request->input('email');
        $customer->dob      = $request->input('dob');
        $customer->city_id  = $request->input('city_id');
        $customer->save();

        Session::flash('success', 'Cập nhật khách hàng thành công');
        return redirect()->route('customers.list');
    }


    public function delete($id){
        $customer = Customers::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.list');
    }

    public function filterByCity(Request $request){
        $idCity = $request->input('city_id');

        $cityFilter = City::findOrFail($idCity);

        $customers = Customers::where('city_id', $cityFilter->id)->get();
        $totalCustomerFilter = count($customers);
        $cities = City::all();

        return view('customers.list', compact('customers', 'cities', 'totalCustomerFilter', 'cityFilter'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword){
            return redirect()->route('customers.list');
        }
        $customers_page = Customers::where('name','LIKE','%'.$keyword.'%')->paginate(5);

        $cities = City::all();
        Session::flash('search_result', true);

        return view('customers.list', compact( 'cities', 'customers_page'));
    }

}
