<?php

namespace App\Http\Controllers;

use App\Models\Idea;
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
        'ideas'=>Idea::latest()->get()
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
        'privacy'=>'required'
    ]);

    $form_data["user_id"]=auth()->id();
    $form_data["author"]=auth()->user()->username;
    $form_data["email"]=auth()->user()->email;

    Idea::create($form_data);

    return redirect('/user/'.auth()->id().'/ideas')->with('success','Idea Shared Successfully');
}

public function update(Request $request){
    $form_data=$request->validate([
        'title'=>'max:50',
        'tagline'=>'max:120',
        'description',
        'sponsor',
        'plan',
        'privacy'
    ]);

 
    Idea::update($form_data);

    return redirect('/user/'.auth()->id().'/ideas')->with('success','Idea Shared Successfully');
}

}
