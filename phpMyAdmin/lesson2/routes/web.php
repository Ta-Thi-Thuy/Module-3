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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function (){
    echo "<h2>This is Home page</h2>";
});

Route::get('/about',function (){

    $route = Route::currentRouteName();
//    echo $route;
    dd($route);

    echo "<h2>This is About page</h2>";
})->name("about");

Route::get('/contact',function (){
    echo "<h2>This ia Contact page</h2>";
});

Route::get('/user', function (){
    return view('user', ['name'=>'TA THI THUY']);
});
Route::get('/user/{name}',function ($name){
    echo "<h2> User name is $name </h2>";
});

Route::get('/user-name/{name?}', function ($name = 'kimchi'){
    echo "<h2>User name is $name </h2>";
});

Route::get('/',[\App\Http\Controllers\HomeController::class, "index"]);
//Route::get('/',"\App\Http\Controllers\HomeController@index");


