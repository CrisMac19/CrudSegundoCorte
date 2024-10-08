<?php

namespace App\Policies;

use App\Models\User;
use App\Models\cliente;
use Illuminate\Auth\Access\Response;

class ClientePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, cliente $cliente): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, cliente $cliente): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, cliente $cliente): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, cliente $cliente): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, cliente $cliente): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }
}
