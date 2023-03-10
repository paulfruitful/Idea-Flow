<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\ProblemComments;
use App\Models\ProblemReactions;
use Illuminate\Support\Facades\DB;
use Database\Factories\problemFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Problem extends Model
{
    use HasFactory;
 protected $fillable=[
  'title',
  'description',
  'author',
  'image',
  'views',
  'tags',
  'upvote',
  'user_id',
  'privacy',
  

 ];

 protected static function newFactory(){
  return problemFactory::new();
}
    public static function recent(){
        return Problem::where('privacy','true')->latest()->limit(20)->paginate(5);
    }

    public function check_reaction(){
      return $this->reactions->where('user_id',auth()->id());
      }

    public static function trending(){
        return DB::table('problems')->orderBy('upvote','desc')->limit(5)->get();
      }
      
    public function comments(){
    return $this->hasMany(ProblemComments::class,'problem_id');
    }

  public function reactions(){
    return $this->hasMany(ProblemReactions::class,'problem_id');
  }

 public function user(){
  return $this->belongsTo(User::class,'user_id');
 }
  } 