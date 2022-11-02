<?php

namespace App\Models;

use App\Models\Idea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Idea_comment extends Model
{
    use HasFactory;
    protected $fillable=[
        'idea_id',
        'comment'
    ];
    public function Idea(){
        return $this->belongsTo(Idea::class,'idea_id');
    }
}
