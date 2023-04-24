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
    $ideas=json_encode(Idea::where('privacy','true')->latest()->get());
    $topIdeas=json_encode(Idea::trending());
    $res=[
        $ideas,
        $topIdeas

    ];
   return $res;
});

Route::get('/ideas/{idea}',function(Idea $idea){
    return json_decode($idea);
});

Route::get('/solutions',function(){
    return json_encode(Solution::where('privacy','true')->orderBy('upvote','desc')->latest()->get());
});