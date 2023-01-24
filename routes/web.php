<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;



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
    return view('pages.login');
});

// this is Route Go To Page Only
Route::get("login","App\Http\Controllers\CustomAuthController@login");
Route::get("register","App\Http\Controllers\CustomAuthController@register");
//----------------------------------//

//this is Route For variable
Route::post("registerClient","App\Http\Controllers\CustomAuthController@registerClient")->name("registerClient");
Route::post("loginClient","App\Http\Controllers\CustomAuthController@loginClient")->name("loginClient");


Route::get("homePage","App\Http\Controllers\CustomAuthController@dashboard");
Route::get("payPage/{id}","App\Http\Controllers\CustomAuthController@payPage");
Route::get("senduri","App\Http\Controllers\CustomAuthController@send");
Route::get("logout","App\Http\Controllers\CustomAuthController@logout");


