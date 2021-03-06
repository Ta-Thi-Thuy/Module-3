<?php


namespace Database\Seeders;


use App\Models\Customers;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        $customer = new Customers();
        $customer->id   = 1;
        $customer->name = "customer 1";
        $customer->dob  = "2018-09-26";
        $customer->email  = "customer1@codegym.vn";
        $customer->city_id  = 1;
        $customer->save();
        $customer = new Customers();
        $customer->id   = 2;
        $customer->name = "customer 2";
        $customer->dob  = "2018-09-26";
        $customer->email  = "customer2@codegym.vn";
        $customer->city_id  = 1;
        $customer->save();
        $customer = new Customers();
        $customer->id   = 3;
        $customer->name = "customer 3";
        $customer->dob  = "2018-09-26";
        $customer->email  = "customer3@codegym.vn";
        $customer->city_id  = 2;
        $customer->save();
    }
}
