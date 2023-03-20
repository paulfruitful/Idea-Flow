<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\ProblemComments;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProblemReactions;

class problemControl extends Controller
{
    //
    public function all(){
        return view('pool.problem',[
            'problems'=>Problem::recent(),
        ]);
    }
    
    public function problem(Problem $problem){
    
        
        $check_id=$problem->check_reaction(); //Returns your reaction

        //Checks if your reaction is greater than 0
        if(count($check_id)>0){
            
            //Checks whether the image is locally stored
        if(preg_match('/images/i',$problem->image)){
            return view('problem.problem',[
            'problem'=>$problem,
            'liked'=>true, //Returns true if $check_id is greater than 0
            'unliked'=>false, //Returns false if $check_id is  equal 0
            "image"=>"/storage/".$problem->image //Returns this if the storage is local
        ]);
    }else{
        return view('problem.problem',[
            'problem'=>$problem,
            'liked'=>true,
            'unliked'=>false,
            "image"=>$problem->image
        ]);
    }
    }else{
        if(preg_match('/images/i',$problem->image)){
        return view('problem.problem',[
            'problem'=>$problem,
            'liked'=>false,
            'unliked'=>true,
            'image'=>"/storage/".$problem->image
        ]);
    }else{
        return view('problem.problem',[
            'problem'=>$problem,
            'liked'=>false,
            'unliked'=>true,
            "image"=>$problem->image
        ]);
    }
    }
    }

    public function create(){
        return view('problem.create');
    }
    
   public function store(Request $request){
    $form_data=$request->validate([
        'title'=>'required|max:30',
        'description'=>'required',
        'privacy'=>'required',
        'image'=>'required'
    ]);
   $form_data['upvote']=0;
   $form_data['views']=0;
    $form_data["user_id"]=auth()->id();
    $form_data["author"]=auth()->user()->username;
    if($request->hasFile('image')){
        $form_data["image"]=$request->file('image')->store('images','public');
    }

    Problem::create($form_data);

    return redirect('/pools/problems')->with('success','Idea Shared Successfully');
   }
 
   public function like(Problem $problem){
    $check_id=$problem->check_reaction();
  
 
    if(count($check_id)>0){
     $problem->reaction->where('user_id', auth()->id())->first()->delete();
     $problem->upvote-=1;
     $problem->save();
     return back()->with('unliked',true);
    }else{
        $data=[
            "user_id"=>auth()->id(),
            "problem_id"=>$problem->id ];
    
        $react=ProblemReactions::create($data);
    
        $problem->upvote+=1;
        $problem->save();
     return back()->with('liked',true);
     }
 
 }

 public function delete(Problem $problem){
    $problem->delete();
    return redirect('/pools/problems');
 }

 public function comment(Problem $problem, Request $request){
    $formData=$request->validate([
        'comment'=>'required'
    ]);
    $formData["problem_id"]=$problem->id;
    $formData["username"]=auth()->user()->username;
  
    ProblemComments::create($formData);
     
    return back()->with('success', 'done');
}
public function edit(Problem $problem){
     return view('problem.edit',[
        'problem'=>$problem
     ]);
}

public function update(Problem $problem,Request $request){
    $form_data=$request->validate([
        'title'=>'max:30',
        'description',
        'privacy'
    ]);
    if($request->hasFile('image')){
        $form_data["image"]=$request->file('image')->store('images','public');
    }
 $problem->update($form_data);
    

    return redirect('/problems/'.$problem->id)->with('success','Problem Shared Successfully');
}
}
