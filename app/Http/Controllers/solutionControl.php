<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;

class solutionControl extends Controller
{
    //
    public function all(){
        
        return view('pool.solution',[
            'ideas'=>Solution::latest()->paginate(10)
        ]);
    }

    public function idea(Solution $solution){
    
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
   
    if($request->hasFile('image')){
        $form_data["image"]=$request->file('image')->store('images','public');
    }

    Solution::create($form_data);

    return redirect('/pools/solutions')->with('success','Solution Shared Successfully');
}
}
