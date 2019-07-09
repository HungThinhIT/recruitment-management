<?php

namespace App\Policies;

use App\User;
use App\Candidate;
use Illuminate\Auth\Access\HandlesAuthorization;

class CandidatePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any candidates.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the candidate.
     *
     * @param  \App\User  $user
     * @param  \App\Candidate  $candidate
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->hasAccess(["Candidate-list"]);
    }

    /**
     * Determine whether the user can create candidates.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasAccess(["Candidate-create"]);
    }

    /**
     * Determine whether the user can update the candidate.
     *
     * @param  \App\User  $user
     * @param  \App\Candidate  $candidate
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->hasAccess(["Candidate-edit"]);
    }

    /**
     * Determine whether the user can delete the candidate.
     *
     * @param  \App\User  $user
     * @param  \App\Candidate  $candidate
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->hasAccess(["Candidate-delete"]);
    }

    /**
     * Determine whether the user can restore the candidate.
     *
     * @param  \App\User  $user
     * @param  \App\Candidate  $candidate
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the candidate.
     *
     * @param  \App\User  $user
     * @param  \App\Candidate  $candidate
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
}
