<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customers', [\App\Http\Controllers\CustomerController::class,'index'])->name('customers.all');
Route::get('/customers/{customerId}', [\App\Http\Controllers\CustomerController::class,'show'])->name('customers.show');
Route::post('/customers',[\App\Http\Controllers\CustomerController::class,'store'])->name('customers.store');
Route::put('/customers/{customerId}', [\App\Http\Controllers\CustomerController::class,'update'])->name('customers.update');
Route::delete('/customers/{customerId}', [\App\Http\Controllers\CustomerController::class,'destroy'])->name('customers.destroy');

