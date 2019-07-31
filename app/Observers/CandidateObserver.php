<?php

namespace App\Observers;

use App\Candidate;
use App\User;
use App\Notifications\NewApplication;

class CandidateObserver
{
    /**
     * Handle the candidate "created" event.
     *
     * @param  \App\Candidate  $candidate
     * @return void
     */
    public function created(Candidate $candidate)
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new NewApplication($candidate));
        }
    }

    /**
     * Handle the candidate "updated" event.
     *
     * @param  \App\Candidate  $candidate
     * @return void
     */
    public function updated(Candidate $candidate)
    {
        if(!$candidate->isDirty('status'))
        {
            $users = User::all();
            foreach ($users as $user) {
                $user->notify(new NewApplication($candidate));
            }
        }
    }

    /**
     * Handle the candidate "deleted" event.
     *
     * @param  \App\Candidate  $candidate
     * @return void
     */
    public function deleted(Candidate $candidate)
    {
        //
    }

    /**
     * Handle the candidate "restored" event.
     *
     * @param  \App\Candidate  $candidate
     * @return void
     */
    public function restored(Candidate $candidate)
    {
        //
    }

    /**
     * Handle the candidate "force deleted" event.
     *
     * @param  \App\Candidate  $candidate
     * @return void
     */
    public function forceDeleted(Candidate $candidate)
    {
        //
    }
}
