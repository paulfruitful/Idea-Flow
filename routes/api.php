<?php

use App\Models\Idea;
use App\Models\Solution;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ideas',function(){
    $ideas=Idea::where('privacy','true')->latest()->get();
    $topIdeas=Idea::trending();
    $res=[
        "ideas"=>$ideas,
        "topIdeas"=>$topIdeas

    ];
   return $res;
});

Route::get('/ideas/{idea}',function(Idea $idea){
    return $idea;
});

Route::get('/solutions',function(){
    $topSolutions=Solution::trending();
    $solutions=Idea::where('privacy','true')->latest()->get();
    $res=[
        "solutions"=>$solutions,
        "topSolutions"=>$topSolutions
    ];
    return $res;
});