<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class ideaControl extends Controller
{
    //
public function all(){
    return view('pool.idea',[
        'idea'=>Idea::latest()
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

public function edit(){
    return view('idea.edit');
}

public function store(Request $request){
    $form_data=$request->validate([
        'title'=>'required',
        'description'=>'required',
        'email'=>'email|email:rfc,dns|required',
        'plan'=>'required',
        'sponsor'=>'required',
        'sector'=>'required',
        'author'=>'required',
        'email'=>'required',
        'user_id'=>'required',
        'privacy'=>'required'
    ]);


    Idea::create($form_data);

    return redirect('/user/'.auth()->id().'/ideas')->with('success','Idea Shared Successfully');
}
}
