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
use App\Http\Controllers\userControl;
use App\Http\Controllers\ideaControl;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/register',[userControl::class,'create']);
Route::post('/register',[userControl::class,'store']);

Route::post('/login',function(){
    return view('user.login');
});
Route::get('/create/idea',[ideaControl::class,'create']);
Route::post('/create/idea',[ideaControl::class,'store']);

Route::post('/login',[userControl::class,'login']);

Route::get('/user/{user}',function(){
    return view('user.profile');
});

Route::get('/user/{user}/profile',function(){
    return view('user.edit');
});

Route::post('/user/{user}',[userControl::class,'editProfile']);

Route::get('/user/{user}/ideas',[]);

Route::post('/user/{user}/follow',[userControl::class,'follow']);
