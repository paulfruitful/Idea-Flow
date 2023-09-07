<?php

namespace App\Observers;

use App\Models\Idea;
use Illuminate\Support\Facades\Cache;

class ideaObserver
{
    /**
     * Handle the Idea "created" event.
     *
     * @param  \App\Models\Idea  $idea
     * @return void
     */
    public function created(Idea $idea)
    {
        //

        Cache::forget('ideas');
    }

    /**
     * Handle the Idea "updated" event.
     *
     * @param  \App\Models\Idea  $idea
     * @return void
     */
    public function updated(Idea $idea)
    {
        //
    }

    /**
     * Handle the Idea "deleted" event.
     *
     * @param  \App\Models\Idea  $idea
     * @return void
     */
    public function deleted(Idea $idea)
    {
        //
    }

    /**
     * Handle the Idea "restored" event.
     *
     * @param  \App\Models\Idea  $idea
     * @return void
     */
    public function restored(Idea $idea)
    {
        //
    }

    /**
     * Handle the Idea "force deleted" event.
     *
     * @param  \App\Models\Idea  $idea
     * @return void
     */
    public function forceDeleted(Idea $idea)
    {
        //
    }
}
