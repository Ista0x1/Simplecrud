<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\athletcontroller;
use App\Http\Controllers\addcontroller;


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
Route::get('home',[athletcontroller::class,'getData']);
Route::post('added',[addcontroller::class,'addData']);
Route::get('delete/{id}',[addcontroller::class,'deleteData']);
Route::get('edite/{id}',[addcontroller::class,'showedite']);
Route::post('edite',[addcontroller::class,'UpdateData']);


