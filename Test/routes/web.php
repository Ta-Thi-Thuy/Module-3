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

Route::get('/list',[\App\Http\Controllers\ProductController::class,'index'])->name('list');
Route::get('/add',[\App\Http\Controllers\ProductController::class,'create'])->name('show.add');
Route::post('/add',[\App\Http\Controllers\ProductController::class,'store'])->name('add');
Route::get('/delete/{id}',[\App\Http\Controllers\ProductController::class,'destroy'])->name('delete');
Route::get('edit/{id}',[\App\Http\Controllers\ProductController::class,'edit'])->name('show.edit');
Route::post('/edit/{id}',[\App\Http\Controllers\ProductController::class,'update'])->name('edit');


