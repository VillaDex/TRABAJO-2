<?php
namespace App\Policies;

use App\Models\User;
use App\Models\Venta;
use Illuminate\Auth\Access\Response;

class VentaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Verificar si el usuario tiene alguno de los roles permitidos para ver ventas
        return $user->hasAnyRole(['User Cliente', 'User Superadmin', 'Admin']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Venta $venta): bool
    {
        // Verificar si el usuario tiene el rol necesario para ver una venta específica
        return $user->hasRole('User Cliente');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Verificar si el usuario tiene el rol necesario para crear ventas
        return $user->hasRole('User Cliente');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Venta $venta): bool
    {
        // Verificar si el usuario tiene el rol necesario para actualizar una venta
        return $user->hasRole('User Cliente');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Venta $venta): bool
    {
        // Verificar si el usuario tiene el rol necesario para eliminar una venta
        return $user->hasRole('User Cliente');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Venta $venta): bool
    {
        // Verificar si el usuario tiene el rol necesario para restaurar una venta
        return $user->hasRole('User Cliente');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Venta $venta): bool
    {
        // Verificar si el usuario tiene el rol necesario para eliminar una venta de forma permanente
        return $user->hasRole('User Cliente');
    }
}
