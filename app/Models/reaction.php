<?php

namespace App\Models;

use App\Models\Idea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reaction extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'idea_id'
    ];
    public function reaction(){
        return $this->belongsTo(Idea::class,'idea_id');
    }
}
