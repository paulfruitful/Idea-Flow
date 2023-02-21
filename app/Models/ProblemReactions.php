<?php

namespace App\Models;

use App\Models\Problem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProblemReactions extends Model
{
    use HasFactory;
    public function problem(){
        return $this->hasMany(Problem::class,'problem_id');
      }
}
