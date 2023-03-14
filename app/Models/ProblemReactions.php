<?php

namespace App\Models;

use App\Models\Problem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProblemReactions extends Model
{
    use HasFactory;
    protected $fillable=[
      'user_id',
      'problem_id'
  ];
    public function problem(){
        return $this->belongsTo(Problem::class,'problem_id');
      }
}
