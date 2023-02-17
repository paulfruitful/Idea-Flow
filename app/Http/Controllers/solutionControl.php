<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;
use App\Models\solutionComment;
use App\Models\solutionReaction;

class solutionControl extends Controller
{
    //
    public function all(){
        
        return view('pool.solution',[
            'solutions'=>Solution::where('privacy','true')->latest()->paginate(8)
        ]);
    }

    public function solution(Solution $solution){
    
        $check_id=$solution->reaction->where('user_id',auth()->id());
        if(count($check_id)>0){
        if(preg_match('/images/i',$solution->image)){
            return view('solution.solution',[
            'solution'=>$solution,
            'liked'=>true,
            'unliked'=>false,
            "image"=>"/storage/".$solution->image
        ]);
    }else{
        return view('solution.solution',[
            'solution'=>$solution,
            'liked'=>true,
            'unliked'=>false,
            "image"=>$solution->image
        ]);
    }
    }else{
        if(preg_match('/images/i',$solution->image)){
        return view('solution.solution',[
            'solution'=>$solution,
            'liked'=>false,
            'unliked'=>true,
            'image'=>"/storage/".$solution->image
        ]);
    }else{
        return view('solution.solution',[
            'solution'=>$solution,
            'liked'=>false,
            'unliked'=>true,
            "image"=>$solution->image
        ]);
    }
    }
    }
    

public function create(){
    return view('solution.create');
}

public function edit(Solution $solution){
    return view('solution.edit',[
        'solution'=>$solution
    ]);
}


public function store(Request $request){
    $form_data=$request->validate([
        'title'=>'required|max:30',
        'tagline'=>'required',
        'description'=>'required',
        'demo'=>'required',
        'sector'=>'required',
        'type'=>'required',
        'monetizable'=>'required',
        'privacy'=>'required',
        'image'=>'required'
    ]);

    $form_data["user_id"]=auth()->id();
    $form_data["author"]=auth()->user()->username;
    $form_data["upvote"]=0;
   
    if($request->hasFile('image')){
        $form_data["image"]=$request->file('image')->store('images','public');
    }

    Solution::create($form_data);

    return redirect('/pools/solutions')->with('success','Solution Shared Successfully');
}

public function update(Solution $solution,Request $request){
    $form_data=$request->validate([
        'title'=>'max:30',
        'demo',
        'description',
        'monetizable',
        'sector',
        'type',
        'privacy'
    ]);
    if($request->hasFile('image')){
        $form_data["image"]=$request->file('image')->store('images','public');
    }
 $solution->update($form_data);
    

    return redirect('/solutions/'.$solution->id)->with('success','Solution Shared Successfully');
}

public function comment(Solution $solution, Request $request){
    $formData=$request->validate([
        'comment'=>'required'
    ]);
    $formData["solution_id"]=$solution->id;
    $formData["username"]=auth()->user()->username;
  
    solutionComment::create($formData);
     
    return back()->with('success', 'done');
}

public function like(Solution $solution){
    $check_id=$solution->reaction->where('user_id',auth()->id());
  
 
    if(count($check_id)>0){
     $solution->reaction->where('user_id', auth()->id())->first()->delete();
     $solution->upvote-=1;
     $solution->save();
     return back()->with('unliked',true);
    }else{
      $data=[
         "user_id"=>auth()->id(),
         "solution_id"=>$solution->id ];
 
     $react=solutionReaction::create($data);
 
     $solution->upvote+=1;
     $solution->save();
     return back()->with('liked',true);
     }
 
 }

 public function delete(Solution $solution){
    $solution->delete();
    return redirect('/pools/solutions');
}

}
