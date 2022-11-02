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

//User Routes
Route::get('/register',[App\Http\Controllers\userControl::class,'create']);
Route::post('/register',[App\Http\Controllers\userControl::class,'store']);

Route::post('/login',function(){
    return view('user.login');
});

Route::post('/login',[App\Http\Controllers\userControl::class,'login']);

Route::get('/user/{user}',function(){
    return view('user.profile');
});

Route::get('/user/{user}/profile',function(){
    return view('user.edit');
});

Route::post('/user/{user}',[App\Http\Controllers\userControl::class,'editProfile']);

Route::post('/user/{user}/follow',[App\Http\Controllers\userControl::class,'follow']);
