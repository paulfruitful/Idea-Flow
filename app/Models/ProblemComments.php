<?php

namespace App\Models;

use App\Models\Problem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProblemComments extends Model
{
    use HasFactory;
    public function problem(){
        return $this->belongsTo(Problem::class,'problem_id');
      }
}
