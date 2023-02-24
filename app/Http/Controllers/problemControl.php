<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use Illuminate\Http\Request;

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
            'idea'=>$problem,
            'liked'=>true, //Returns true if $check_id is greater than 0
            'unliked'=>false, //Returns false if $check_id is  equal 0
            "image"=>"/storage/".$problem->image //Returns this if the storage is local
        ]);
    }else{
        return view('problem.problem',[
            'idea'=>$problem,
            'liked'=>true,
            'unliked'=>false,
            "image"=>$problem->image
        ]);
    }
    }else{
        if(preg_match('/images/i',$problem->image)){
        return view('problem.problem',[
            'idea'=>$problem,
            'liked'=>false,
            'unliked'=>true,
            'image'=>"/storage/".$problem->image
        ]);
    }else{
        return view('problem.problem',[
            'idea'=>$problem,
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
    
}
