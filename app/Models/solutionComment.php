<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solutionComment extends Model
{
    use HasFactory;
    protected $fillable=[
        'solution_id',
        'comment',
        'username'
    ];
    public function solution(){
        return $this->belongsTo(Solution::class,'solution_id');
    }
}
