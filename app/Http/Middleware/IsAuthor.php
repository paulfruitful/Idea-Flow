<?php

namespace App\Http\Middleware;
use App\Models\Idea;
use Closure;
use Illuminate\Http\Request;

class IsAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,  $type)
    {
         
        if($request[$type]=='idea'){
          
            $idea=Idea::find($request[$type]);
           
             dd($idea);
            if($idea===auth()->id()){

            return $next($request);
            }else{

            
        return redirect('/pools/ideas');
            }

            }else{
        return redirect('/pools/ideas');}
}
}