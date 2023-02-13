<?php

namespace App\Models;

use App\Models\User;
use App\Models\solutionReaction;
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
   return $this->hasMany(Solution::class,'solution_id');
 }  

}
