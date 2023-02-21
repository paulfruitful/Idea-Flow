<?php

namespace App\Models;

use App\Models\User;
use App\Models\solutionComment;
use App\Models\solutionReaction;
use Illuminate\Support\Facades\DB;
use Database\Factories\solutionFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Solution extends Model
{
    use HasFactory,HasUuids;
 protected $fillable=[
    'title',
    'description',
    'demo',
    'author',
    'image',
    'sector',
    'type',
    'tagline',
    'privacy',
    'monetizable',
    'upvote',
    'user_id'
 ];

 public function user(){
    return $this->belongsToMany(User::class,'user_id');
 }

 public function reaction(){
   return $this->hasMany(solutionReaction::class,'solution_id');
 }
 public function solutionComment(){
   return $this->hasMany(solutionComment::class,'solution_id');
 }  

protected static function newFactory(){
   return solutionFactory::new();
}

public static function recent(){
   return Solution::where('privacy','true')->latest()->paginate(8);
 }
 public function check_reaction(){
   return $this->reaction->where('user_id',auth()->id());
 }
 public static function trending(){
  return DB::table('solutions')->orderBy('upvote','desc')->limit(5)->get();
 }
 
}
