<?php

use App\Models\Idea;
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
   return json_encode(Idea::where('privacy','true')->latest());
});
Route::get('/topIdeas',function(){
    return json_encode(Idea::trending());
 });
 
Route::get('/ideas/{idea}',function(Idea $idea){
    return json_decode($idea);
});