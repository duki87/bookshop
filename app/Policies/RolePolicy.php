<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user)
    {
        return $user->role_id == 1;
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Role $role)
    {
        //
    }

    public function delete(User $user, Role $role)
    {
        //
    }

    public function restore(User $user, Role $role)
    {
        //
    }

    public function forceDelete(User $user, Role $role)
    {
        //
    }
}
