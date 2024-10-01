<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Auth\Access\Response;

class ClientePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Verificar si el usuario tiene los roles permitidos para ver clientes
        return $user->hasAnyRole(['User Cliente', 'User Superadmin']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Cliente $cliente): bool
    {
        // Verificar si el usuario tiene el rol necesario para ver un cliente específico
        return $user->hasRole('User Cliente');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Verificar si el usuario tiene el rol necesario para crear clientes
        return $user->hasRole('User Cliente');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Cliente $cliente): bool
    {
        // Verificar si el usuario tiene el rol necesario para actualizar un cliente
        return $user->hasRole('User Cliente');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Cliente $cliente): bool
    {
        // Verificar si el usuario tiene el rol necesario para eliminar un cliente
        return $user->hasRole('User Cliente');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Cliente $cliente): bool
    {
        // Verificar si el usuario tiene el rol necesario para restaurar un cliente
        return $user->hasRole('User Cliente');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Cliente $cliente): bool
    {
        // Verificar si el usuario tiene el rol necesario para eliminar un cliente de forma permanente
        return $user->hasRole('User Cliente');
    }
}
