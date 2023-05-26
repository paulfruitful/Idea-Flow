<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Models\solutionReaction;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SolutionLikeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
   
    public function __construct(public $solution)
    {
      //
      $this->solution=$solution;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $data=[
            "user_id"=>auth()->id(),
            "solution_id"=>$this->solution->id ];
    
        $react=solutionReaction::create($data);
    
        $this->solution->upvote+=1;
        $this->solution->save();
    }
}
