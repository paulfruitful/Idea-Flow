<?php

namespace App\Models;

use App\Models\User;
use App\Models\Idea_comment;
use Database\Factories\IdeaFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Idea extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable=[
 'title',
 'description',
 'author',
 'email',
 'user_id',
 'sponsor',
 'plan',
 'upvote',
 'privacy',
 'tagline',
 'image'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
      }

    public function Idea_comment(){
      return $this->hasMany(Idea_comment::class,'idea_id');
    }  

  protected static function newFactory()
  {
    return IdeaFactory::new();
  }
}
