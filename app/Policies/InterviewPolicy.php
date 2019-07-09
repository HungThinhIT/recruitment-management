<?php

namespace App\Policies;

use App\User;
use App\Interview;
use Illuminate\Auth\Access\HandlesAuthorization;

class InterviewPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any interviews.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the interview.
     *
     * @param  \App\User  $user
     * @param  \App\Interview  $interview
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->hasAccess(["Interview-list"]);
    }

    /**
     * Determine whether the user can create interviews.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasAccess(["Interview-create"]);
    }

    /**
     * Determine whether the user can update the interview.
     *
     * @param  \App\User  $user
     * @param  \App\Interview  $interview
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->hasAccess(["Interview-edit"]);
    }

    /**
     * Determine whether the user can delete the interview.
     *
     * @param  \App\User  $user
     * @param  \App\Interview  $interview
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->hasAccess(["Interview-delete"]);
    }

    /**
     * Determine whether the user can restore the interview.
     *
     * @param  \App\User  $user
     * @param  \App\Interview  $interview
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the interview.
     *
     * @param  \App\User  $user
     * @param  \App\Interview  $interview
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
}
