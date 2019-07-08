<?php

namespace App\Policies;

use App\User;
use App\Interviewer;
use Illuminate\Auth\Access\HandlesAuthorization;

class InterviewerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any interviewers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the interviewer.
     *
     * @param  \App\User  $user
     * @param  \App\Interviewer  $interviewer
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->hasAccess(["Interviewer-list"]);
    }

    /**
     * Determine whether the user can create interviewers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasAccess(["Interviewer-create"]);
    }

    /**
     * Determine whether the user can update the interviewer.
     *
     * @param  \App\User  $user
     * @param  \App\Interviewer  $interviewer
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->hasAccess(["Interviewer-edit"]);
    }

    /**
     * Determine whether the user can delete the interviewer.
     *
     * @param  \App\User  $user
     * @param  \App\Interviewer  $interviewer
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->hasAccess(["Interviewer-delete"]);
    }

    /**
     * Determine whether the user can restore the interviewer.
     *
     * @param  \App\User  $user
     * @param  \App\Interviewer  $interviewer
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the interviewer.
     *
     * @param  \App\User  $user
     * @param  \App\Interviewer  $interviewer
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
}
