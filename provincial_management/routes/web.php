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

Route::get("login", [\App\Http\Controllers\UserController::class, "showLogin"])->name("showLogin");
Route::get("register", [\App\Http\Controllers\UserController::class, "showRegister"])->name("showRegister");

Route::post("register", [\App\Http\Controllers\UserController::class, "storeRegister"])->name("storeRegister");
Route::post("login",[\App\Http\Controllers\UserController::class,'login'])->name('login');

Route::get('logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');

Route::middleware("UserMiddleware")->group(function () {


    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::group(['prefix' => 'cities'], function () {
        Route::get('/',[\App\Http\Controllers\CityController::class,'index'])->name('cities.list');
        Route::get('/create',[\App\Http\Controllers\CityController::class,'create'])->name('cities.create');
        Route::post('/store',[\App\Http\Controllers\CityController::class,'store'])->name('cities.store');
        Route::get('/edit/{id}',[\App\Http\Controllers\CityController::class,'edit'])->name('cities.edit');
        Route::post('/edit/{id}',[\App\Http\Controllers\CityController::class,'update'])->name('cities.update');
        Route::get('/delete/{id}',[\App\Http\Controllers\CityController::class,'delete'])->name('cities.delete');
        Route::post('/search',[\App\Http\Controllers\CityController::class,'search'])->name('cities.search');



    });


    Route::group(['prefix'=>'customers'],function (){
        Route::get('/',[\App\Http\Controllers\CustomersController::class,'index'])->name('customers.list');
        Route::get('/create',[\App\Http\Controllers\CustomersController::class,'create'])->name('customers.create');
        Route::post('/store',[\App\Http\Controllers\CustomersController::class,'store'])->name('customers.store');
        Route::get('/edit/{id}',[\App\Http\Controllers\CustomersController::class,'edit'])->name('customers.edit');
        Route::post('/edit/{id}',[\App\Http\Controllers\CustomersController::class,'update'])->name('customers.update');
        Route::get('/delete/{id}',[\App\Http\Controllers\CustomersController::class,'delete'])->name('customers.delete');
        Route::post('/search',[\App\Http\Controllers\CustomersController::class,'search'])->name('customers.search');

        Route::get('/filter',[\App\Http\Controllers\CustomersController::class,'filterByCity'])->name('customers.filterByCity');


    });

});
