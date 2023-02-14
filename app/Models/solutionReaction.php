<?php

namespace App\Models;

use App\Models\Solution;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class solutionReaction extends Model
{
    use HasFactory;
public function solution(){
    return $this->belongsTo(Solution::class,'solution_id');
}

}
