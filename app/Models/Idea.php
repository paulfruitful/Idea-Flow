<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Idea_comment;
class Idea extends Model
{
    use HasFactory;
    protected $fillable=[
 'title',
 'description',
 'author',
 'email',
 'user_id',
 'plan',
 'sponsor',
 'sector',
 'upvote'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
      }

    public function Idea_comment(){
      return $this->hasMany(Idea_comment::class,'idea_id');
    }  
}
