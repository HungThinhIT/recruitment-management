<?php

namespace App\Observers;

use App\Candidate;
use App\User;
use App\Notifications\NewApplication;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
class CandidateObserver implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    public function __construct(Request $request)
    {
        $this->message  = $request->contents;
    }

    public function broadcastOn()
    {
        return ['candidate-notify'];
    }

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
