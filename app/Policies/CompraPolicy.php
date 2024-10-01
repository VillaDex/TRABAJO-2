<?php
namespace App\Policies;

use App\Models\User;
use App\Models\Compra;
use Illuminate\Auth\Access\Response;

class CompraPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Verificar si el usuario tiene alguno de los roles permitidos para ver compras
        return $user->hasAnyRole(['User Proveedor', 'User Superadmin', 'Admin']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Compra $compra): bool
    {
        // Verificar si el usuario tiene el rol necesario para ver una compra específica
        return $user->hasRole('User Proveedor');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Verificar si el usuario tiene el rol necesario para crear compras
        return $user->hasRole('User Proveedor');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Compra $compra): bool
    {
        // Verificar si el usuario tiene el rol necesario para actualizar una compra
        return $user->hasRole('User Proveedor');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Compra $compra): bool
    {
        // Verificar si el usuario tiene el rol necesario para eliminar una compra
        return $user->hasRole('User Proveedor');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Compra $compra): bool
    {
        // Verificar si el usuario tiene el rol necesario para restaurar una compra
        return $user->hasRole('User Proveedor');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Compra $compra): bool
    {
        // Verificar si el usuario tiene el rol necesario para eliminar una compra de forma permanente
        return $user->hasRole('User Proveedor');
    }
}
