<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ApicallController;
use App\Http\Controllers\LoginController;

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
Route::view("about",'about');
Route::get("users",[Users::class,'index']);
Route::get("users/{id}",[Users::class,'userid']);
Route::get("user-api",[Users::class,'userapi']);
Route::get("headcomp",[Users::class,'userwithheadcomp']);

Route::get("customer",[CustomerController::class,'getCustomer']);

Route::get("apicall",[ApicallController::class,'fetchapi']);


Route::get('/login', function () {
    if(session()->has('test_user_name'))
    {
        return redirect('profile');
    }
    else{
        return view('login');
    }
});
Route::post("logincheck",[LoginController::class,"logincheck"]);
Route::get('/profile', function () {
    if(session()->has('test_user_name'))
    {
        return view('profile');
    }
    else{
        return view('login');
    }
    
});
Route::get('/logout', function () {
    if(session()->has('test_user_name'))
    {
        session()->pull('test_user_name');
        
    }
    return redirect('login');
});