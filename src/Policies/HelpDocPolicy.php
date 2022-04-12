<?php

namespace Spoyntersmith\LaravelBackpackHelpDocs\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spoyntersmith\LaravelBackpackHelpDocs\Models\HelpDoc;

class HelpDocPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HelpDoc  $helpDoc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, HelpDoc $helpDoc)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HelpDoc  $helpDoc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, HelpDoc $helpDoc)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HelpDoc  $helpDoc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, HelpDoc $helpDoc)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HelpDoc  $helpDoc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, HelpDoc $helpDoc)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HelpDoc  $helpDoc
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, HelpDoc $helpDoc)
    {
        //
    }
}
