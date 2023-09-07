<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\reaction;
use App\Models\Idea_comment;
use Doctrine\Common\Cache\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ideaControl extends Controller
{
    //
public function all(Request $req){
   $ideas=cache()->rememberForever('ideas',function(){
     return Idea::where('privacy','true')->latest()->paginate(25);
   });
   
   if($req->tag){
    
       $ideas=cache()->rememberForever('ideas',function(){
        return Idea::where('tags','LIKE','%'.$req->tag.'%')->orderBy('upvote','desc')->paginate(25);
       });
       return view('pool.idea',compact('ideas'));
   }

   if($req->search){
       $ideas=cache()->rememberForever('ideas',function(){
        return Idea::where('title','like','%'.$req->search .'%')
        ->orWhere('author','LIKE', '%'.$req->search.'%')
        ->orWhere('tagline','LIKE','%'.$req->search .'%')
        ->paginate(25);
       });
       return view('pool.idea',compact('ideas'));
   }
   return view('pool.idea',compact('ideas'));
}

public function idea(Idea $idea){
    
    $check_id=$idea->check_reaction();
    $similar=$idea->similar();
    if(count($check_id)>0){
    if(preg_match('/images/i',$idea->image)){
        return view('idea.idea',[
        'idea'=>$idea,
        'liked'=>true,
        'unliked'=>false,
        "image"=>"/storage/".$idea->image,
        "similar"=>$similar
    ]);
}else{
    return view('idea.idea',[
        'idea'=>$idea,
        'liked'=>true,
        'unliked'=>false,
        "image"=>$idea->image,
        "similar"=>$similar
    ]);
}
}else{
    if(preg_match('/images/i',$idea->image)){
    return view('idea.idea',[
        'idea'=>$idea,
        'liked'=>false,
        'unliked'=>true,
        'image'=>"/storage/".$idea->image,
        "similar"=>$similar
    ]);
}else{
    return view('idea.idea',[
        'idea'=>$idea,
        'liked'=>false,
        'unliked'=>true,
        "image"=>$idea->image,
        "similar"=>$similar
    ]);
}
}
}

public function create(){
    return view('idea.create');
}

public function edit(Idea $idea){
    return view('idea.edit',[
        'idea'=>$idea
    ]);
}

public function store(Request $request){
    $form_data=$request->validate([
        'title'=>'required|max:30',
        'tagline'=>'required|max:120',
        'description'=>'required',
        'sponsor'=>'required',
        'plan'=>'required',
        'privacy'=>'required',
        'image'=>'required'
    ]);

    $form_data["user_id"]=auth()->id();
    $form_data["author"]=auth()->user()->username;
    $form_data["email"]=auth()->user()->email;
    if($request->hasFile('image')){
        $form_data["image"]=$request->file('image')->store('images','public');
    }

    Idea::create($form_data);

    return redirect('/pools/ideas')->with('success','Idea Shared Successfully');
}

public function update(Idea $idea,Request $request){
    $form_data=$request->validate([
        'title'=>'required|max:30',
        'tagline'=>'required|max:120',
        'description'=>'required',
        'sponsor'=>'required',
        'plan'=>'required',
        'privacy'=>'required',
        'image'=>'mimes:jpeg,jpg,png,gif'
    ]);

 $idea->update($form_data);
    

    return redirect('/ideas/'.$idea->id)->with('success','Idea Shared Successfully');
}

public function comment(Idea $idea, Request $request){
    $formData=$request->validate([
        'comment'=>'required'
    ]);
    $formData["idea_id"]=$idea->id;
    $formData["username"]=auth()->user()->username;
  
    Idea_comment::create($formData);
     
    return back()->with('success', 'done');
}

public function like(Idea $idea){
   $check_id=$idea->reaction->where('user_id',auth()->id());
 

   if(count($check_id)>0){
    $idea->reaction->where('user_id', auth()->id())->first()->delete();
    $idea->upvote-=1;
    $idea->save();
    return back()->with('unliked',true);
   }else{
     $data=[
        "user_id"=>auth()->id(),
        "idea_id"=>$idea->id ];

    $react=reaction::create($data);

    $idea->upvote+=1;
    $idea->save();
    return back()->with('liked',true);
    }

}

public function delete(Idea $idea){
    $idea->delete();
    return redirect()->back();
}

}
