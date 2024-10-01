<?php
namespace App\Policies;

use App\Models\User;
use App\Models\Proveedor;
use Illuminate\Auth\Access\Response;

class ProveedorPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Verificar si el usuario tiene uno de los roles permitidos para ver proveedores
        return $user->hasAnyRole(['User Proveedor', 'Admin', 'User Superadmin']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Proveedor $proveedor): bool
    {
        // Verificar si el usuario tiene el rol necesario para ver un proveedor específico
        return $user->hasRole('User Proveedor');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Verificar si el usuario tiene el rol necesario para crear proveedores
        return $user->hasRole('User Proveedor');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Proveedor $proveedor): bool
    {
        // Verificar si el usuario tiene el rol necesario para actualizar un proveedor
        return $user->hasRole('User Proveedor');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Proveedor $proveedor): bool
    {
        // Verificar si el usuario tiene el rol necesario para eliminar un proveedor
        return $user->hasRole('User Proveedor');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Proveedor $proveedor): bool
    {
        // Verificar si el usuario tiene el rol necesario para restaurar un proveedor
        return $user->hasRole('User Proveedor');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Proveedor $proveedor): bool
    {
        // Verificar si el usuario tiene el rol necesario para eliminar un proveedor de forma permanente
        return $user->hasRole('User Proveedor');
    }
}
