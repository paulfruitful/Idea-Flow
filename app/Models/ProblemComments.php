<?php

namespace App\Models;

use App\Models\Problem;
use Database\Factories\problem_commentsFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProblemComments extends Model
{
    use HasFactory;
    protected $fillable=[
      'problem_id',
      'comment',
      'username'
    ];
    public function problem(){
        return $this->belongsTo(Problem::class,'problem_id');
      }
      protected static function newFactory()
      {
        return problem_commentsFactory::new();
      }
}
