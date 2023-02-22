<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use Illuminate\Http\Request;

class problemControl extends Controller
{
    //
    public function all(){
   
        return view('pool.problem',[
            'problem'=>Problem::recent(),
        ]);
    }
    
}
