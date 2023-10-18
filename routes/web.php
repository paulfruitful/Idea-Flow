<?php

use App\Models\Idea;

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
use App\Models\User;
use App\Models\Problem;
use App\Models\Solution;
use App\Http\Controllers\ideaControl;
use App\Http\Controllers\userControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\problemControl;
use App\Http\Controllers\solutionControl;

//Primary User Routes
Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/pools', function(){
    return view('pool.pools',[
        'ideas'=>Idea::recent(),
        'solutions'=>Solution::recent(),
        'topIdeas'=>Idea::trending(),
        'topSolutions'=>Solution::trending(),
        'problems'=>Problem::recent(),
        'topProblems'=>Problem::trending(),
    ]);
});
Route::get('/register',[userControl::class,'create']);
Route::post('/register',[userControl::class,'store']);

Route::post('/login',function(){
    return view('user.login');
});
Route::post('/login',[userControl::class,'login']);
Route::get('/logout',[userControl::class,'logout']);


//Get Routes for Solutions
Route::get('/pools/solutions',[solutionControl::class,'all']);
Route::get('/create/solution',[solutionControl::class,'create']);

//Post Route for Solution
Route::post('/create/solution',[solutionControl::class,'store']);

//Get Routes for Ideas
Route::get('/pools/ideas',[ideaControl::class,'all']);

//Post Idea Routes
Route::prefix('create')->middleware('auth')->group(
    function(){

Route::get('/idea',[ideaControl::class,'create']);
Route::post('/idea',[ideaControl::class,'store']);
    }
);

//Problem Get Routes
Route::get('/pools/problems',[problemControl::class,'all']);
Route::get('/problems/{problem}/',[problemControl::class,'problem']);
Route::get('/create/problem',[problemControl::class,'create']);
Route::get('/problem/{problem}/like',[problemControl::class,'like'])->middleware('auth');
Route::post('/problem/{problem}/comment',[problemControl::class,'comment']);
Route::get('/problem/{problem}/edit',[problemControl::class,'edit'])->middleware('auth');
Route::get('/problem/{problem}/delete',[problemControl::class,'delete'])->middleware('auth');

//Problem Post Routes
Route::post('/create/problem',[problemControl::class,'store']);
Route::post('problem/{problem}/edit',[problemControl::class,'update']);

//Solution Routes
Route::get('/solutions/{solution}',[solutionControl::class,'solution']);
Route::get('/solutions/{solution}/edit',[solutionControl::class,'edit'])->middleware('auth');
Route::post('/solutions/{solution}/update',[solutionControl::class, 'update'])->middleware('auth');
Route::get('/solutions/{solution}/delete',[solutionControl::class,'delete'])->middleware('auth');
Route::post('/solutions/{solution}/comment',[solutionControl::class,'comment'])->middleware('auth');
Route::get('/solutions/{solution}/like',[solutionControl::class,'like'])->middleware('auth');

//Idea Routes
Route::get('/idea/{idea}',[ideaControl::class,'idea']);
Route::get('/idea/{idea}/edit',[ideaControl::class,'edit'])->middleware('auth');
Route::post('/idea/{idea}/update',[ideaControl::class, 'update'])->middleware('auth','is_author:idea');
Route::get('/idea/{idea}/delete',[ideaControl::class,'delete'])->middleware('auth','is_author:idea');
Route::post('/idea/{idea}/comment',[ideaControl::class,'comment'])->middleware('auth');
Route::get('/idea/{idea}/like',[ideaControl::class,'like'])->middleware('auth');
Route::get('/idea/{idea}/analytics',[ideaControl::class,'analytics'])->middleware('is_author:idea');


//User Routes
Route::get('/user/{user}',[userControl::class,'profile'])->middleware('auth');


Route::post('/user/{user}/follow',[userControl::class,'follow']);

Route::post('/user/{user}',[userControl::class,'editProfile']);

Route::get('/user/{user}/ideas',function(){
    // function for now
    return redirect('/pools');
});

