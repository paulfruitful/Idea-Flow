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
    return view('pool.pools',[
        'ideas'=>Idea::latest()
    ]);
});


Route::controller(userControl::class)->group(function(){
    Route::get('/register',[userControl::class,'create']);
    Route::post('/register',[userControl::class,'store']);
    Route::prefix('user')->group(function(){
   Route::get('/user/{user}',function(){
    return view('user.profile');
});

   Route::get('{user}/profile',function(){
    return view('user.edit');
});

  Route::post('{user}',[userControl::class,'editProfile']);

  Route::get('{user}/ideas',[]);

  Route::post('{user}/follow',[userControl::class,'follow']);

    });
});
Route::post('/login',function(){
    return view('user.login');
});
Route::logout('/logout',[userControl::class,'logout']);
Route::post('/login',[userControl::class,'login']);
Route::prefix('/create')->controller(ideaControl::class)->group(function(){

Route::get('/idea',['create']);
Route::post('/idea',['store']);
});

