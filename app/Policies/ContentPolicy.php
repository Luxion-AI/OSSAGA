<?php

namespace App\Policies;

use App\Models\Content;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use App\Models\Period;
use App\Enums\Role;

class ContentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Anyone logged in can view the admin content list (filtered in controller/livewire)
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Content $content): bool
    {
        return true; // Usually viewing within admin is fine, editing is restricted
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        $role = $user->roleInActivePeriod();
        return in_array($role, [Role::SuperAdmin->value, Role::Chairman->value, Role::Sekbid->value]);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Content $content): bool
    {
        // Must be active period to edit
        if ($content->period_id !== Period::active()?->id) {
            return false; // Cannot edit archived content
        }

        $role = $user->roleInActivePeriod();
        
        if ($role === Role::SuperAdmin->value || $role === Role::Chairman->value) {
            return true;
        }

        // Sekbid can only edit their own sekbid's content
        if ($role === Role::Sekbid->value) {
            return $user->sekbidInActivePeriod() === $content->sekbid_owner;
        }

        return false;
    }

    /**
     * Determine whether the user can publish the model.
     */
    public function publish(User $user, Content $content): bool
    {
        $role = $user->roleInActivePeriod();
        // Only Chairman and Superadmin can approve/publish contents directly
        return in_array($role, [Role::SuperAdmin->value, Role::Chairman->value]);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Content $content): bool
    {
        return $this->update($user, $content);
    }
}
