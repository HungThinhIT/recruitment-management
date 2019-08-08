<?php

namespace App\Observers;

use App\Candidate;
use App\User;
use App\Notifications\NewApplication;
use App\Events\CandidatePusherEvent;
use Pusher\Pusher;

class CandidateObserver{

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
            $this->sendNotification($user->id, $candidate);
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


    private function sendNotification($idUser, $messages)
    {
        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $pusher->trigger('user-notifications-id-'.$idUser, 'send-new-candidates', $messages);
    }
}
