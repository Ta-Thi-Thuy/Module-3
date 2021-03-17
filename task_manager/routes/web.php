<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});// customer/index         customer/create       customer/1/show     customer/10/edit
Route::get('/', function (){
    return view('index');
});

//Route::resource('customers','\App\Http\Controllers\CustomerController');
Route::group(['prefix'=>'customer'],function (){
    Route::get('/',[\App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
    });
