<?php

namespace App\Policies;

use App\Models\User;
use App\Models\product;
use Illuminate\Auth\Access\Response;

class ProductoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN COMPRAS', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, product $product): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN COMPRAS', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN COMPRAS', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, product $product): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN COMPRAS', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, product $product): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN COMPRAS', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, product $product): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN COMPRAS', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, product $product): bool
    {
        return $user->hasAnyRole(['SUPERADMIN', 'ADMIN', 'ADMIN COMPRAS', 'ADMIN VENTAS', 'SUPERVISOR']);
        //
    }
}
