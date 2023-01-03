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
use App\Models\Idea;

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/pools', function(){
    return view('pools',[
        'ideas'=>Idea::latest()
    ]);
});
Route::get('/register',[userControl::class,'create']);
Route::post('/register',[userControl::class,'store']);

Route::post('/login',function(){
    return view('user.login');
});
Route::post('/login',[userControl::class,'login']);

Route::get('/create/idea',[ideaControl::class,'create']);
Route::post('/create/idea',[ideaControl::class,'store']);

Route::get('/user/{user}',function(){
    return view('user.profile');
});

Route::get('/user/{user}/profile',function(){
    return view('user.edit');
});

Route::post('/user/{user}',[userControl::class,'editProfile']);

Route::get('/user/{user}/ideas',[]);

Route::post('/user/{user}/follow',[userControl::class,'follow']);
