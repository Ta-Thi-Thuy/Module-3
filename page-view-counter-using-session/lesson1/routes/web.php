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
Route::get('/greeting',function (){
    echo 'Hello world!';

});
Route::get('/greeting/{name?}', function ($name = null){
    if ($name){
        echo 'Hello ' . $name . '!';

    }else{
        echo 'Hello World!';
    }
});


Route::get('/login', function (){
    return view('login');
});
Route::post('/login', function (\Illuminate\Http\Request $request){
    if ($request->username == 'admin'
    && $request->password == 'admin'){
        return view('welcome_admin');
    }
    return view('login_error');
});
Route::get('/calculator',function (){
    return view('calculator');
});

Route::post('/calculator',function (\Illuminate\Http\Request $request){
    if (!empty($request->price)  && (!empty($request->discount))){
        $discount_amount = $request->input('price')* $request->input('discount')*0.01;
        $discount_price = $request->input('price')*(100- $request->input('discount'))*0.01;
        return view('calculator', compact(['discount_amount','discount_price']));

    }
    return view('calculator');

});

Route::get('/dictionary',function (){
    return view('dictionary');
});

Route::post('/dictionary',function (\Illuminate\Http\Request $request){
if (!empty($request->english)){
    $dictionary = array('hello'=>'xin chao','pink'=>'mau hong','good'=>'tot');
    foreach ($dictionary as $englishs => $vietnamese){
        if ($request->english == $englishs){
            return view('dictionary',compact(['vietnamese']));
        }

    }

}
});
