<?php

namespace App\Policies;

use App\User;
use App\FormatArticle;
use Illuminate\Auth\Access\HandlesAuthorization;

class FormatArticlePolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any format articles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the format article.
     *
     * @param  \App\User  $user
     * @param  \App\FormatArticle  $formatArticle
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->hasAccess(["Format-management"]);
    }

    /**
     * Determine whether the user can create format articles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasAccess(["Format-management"]);
    }

    /**
     * Determine whether the user can update the format article.
     *
     * @param  \App\User  $user
     * @param  \App\FormatArticle  $formatArticle
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->hasAccess(["Format-management"]);
    }

    /**
     * Determine whether the user can delete the format article.
     *
     * @param  \App\User  $user
     * @param  \App\FormatArticle  $formatArticle
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->hasAccess(["Format-management"]);
    }

    /**
     * Determine whether the user can restore the format article.
     *
     * @param  \App\User  $user
     * @param  \App\FormatArticle  $formatArticle
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the format article.
     *
     * @param  \App\User  $user
     * @param  \App\FormatArticle  $formatArticle
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
}
