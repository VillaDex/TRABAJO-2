<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Producto;
use Illuminate\Auth\Access\Response;

class ProductoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Verificar si el usuario tiene alguno de los roles necesarios para ver productos
        return $user->hasAnyRole(['User Inventario', 'User Superadmin']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Producto $producto): bool
    {
        // Verificar si el usuario tiene el rol necesario para ver un producto específico
        return $user->hasRole('User Inventario');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Verificar si el usuario tiene el rol necesario para crear productos
        return $user->hasRole('User Inventario');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Producto $producto): bool
    {
        // Verificar si el usuario tiene el rol necesario para actualizar productos
        return $user->hasRole('User Inventario');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Producto $producto): bool
    {
        // Verificar si el usuario tiene el rol necesario para eliminar productos
        return $user->hasRole('User Inventario');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Producto $producto): bool
    {
        // Verificar si el usuario tiene el rol necesario para restaurar productos
        return $user->hasRole('User Inventario');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Producto $producto): bool
    {
        // Verificar si el usuario tiene el rol necesario para eliminar productos de forma permanente
        return $user->hasRole('User Inventario');
    }
}
