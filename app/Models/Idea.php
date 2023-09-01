<?php

namespace App\Models;

use App\Models\User;
use App\Models\reaction;
use App\Models\Idea_comment;
use Illuminate\Support\Facades\DB;
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
 'image',
 'tags'
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
  public function reaction(){
    return $this->hasMany(reaction::class,'idea_id');
}

public static function recent(){
  return Idea::where('privacy','true')->latest()->limit(20)->paginate(5);
}
public function check_reaction(){
  return $this->reaction->where('user_id',auth()->id());
}

public static function trending(){
  return DB::table('ideas')->orderBy('upvote','desc')->limit(5)->get();
}

public function similar(){
return Db::table('ideas')->where('plan','like','%'.$this->tags.'%')->orderBy('upvote','desc')->limit(5)->get();
}
}
