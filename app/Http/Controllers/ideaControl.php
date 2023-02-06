<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Idea_comment;
use App\Models\reaction;
use Illuminate\Http\Request;

class ideaControl extends Controller
{
    //
public function all(){
    $hero = [
        'title'=>'Keep The Cycle Of Ideas Flowing',
        'tagline'=>'Build The Next Solution By Implementing Ideas'
    ];
    return view('pool.idea',[
        'ideas'=>Idea::latest()->paginate(10)
    ]);
}

public function idea(Idea $idea){
    return view('idea.idea',[
        'idea'=>$idea
    ]);
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
        'title'=>'required',
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

    Idea::create($form_data);

    return redirect('/user/'.auth()->id().'/ideas')->with('success','Idea Shared Successfully');
}

public function update(Idea $idea,Request $request){
    $form_data=$request->validate([
        'title'=>'max:50',
        'tagline'=>'max:120',
        'description',
        'sponsor',
        'plan',
        'privacy'
    ]);

 $idea->update($form_data);
    

    return redirect('/user/'.auth()->id().'/ideas')->with('success','Idea Shared Successfully');
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
    $data=[
        "user_id"=>auth()->id(),
        "idea_id"=>$idea->id 
];
reaction::create($data);
dd(Idea::find('983d9950-a44c-43a0-8ad2-a9b424e9548f')->idea_comment);
    $idea->upvote=count($idea->reaction);
    $idea->save();
    return back();
}

}
