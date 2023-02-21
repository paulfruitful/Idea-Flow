<?php

namespace App\Models;

use App\Models\ProblemComments;
use App\Models\ProblemReactions;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Problem extends Model
{
    use HasFactory;

    public static function recent(){
        return Problem::where('privacy','true')->latest()->paginate(5);
    }

    public function check_reaction(){
        return $this->reaction->where('user_id',auth()->id());
      }

    public static function trending(){
        return DB::table('problems')->orderBy('upvote','desc')->limit(5);
      }
      
    public function comments(){
    return $this->hasMany(ProblemComments::class,'problem_id');
    }

  public function reactions(){
    return $this->hasMany(ProblemReactions::class,'problem_id');
  }

  } 