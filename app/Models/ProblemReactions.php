<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProblemReactions extends Model
{
    use HasFactory;
    public function problem(){
        return $this->hasMany(Problem::class,'problem_id');
      }
}
