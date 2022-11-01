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
}
