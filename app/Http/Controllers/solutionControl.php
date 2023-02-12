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
    
public function create(){
    return view('solution.create');
}

public function edit(Solution $solution){
    return view('solution.edit',[
        'solution'=>$solution
    ]);
}
}
