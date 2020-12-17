<?php

namespace App\Traits;

use App\Models\Role;
use Illuminate\Support\Facades\Lang;

trait HasRole
{
    /**
     * Check if user is admin.
     *
     * @return bool
     */
    public function getisAdminAttribute(): bool
    {
        return $this->role_id == Role::ADMIN;
    }

    /**
     * Retrive role name.
     *
     * @return string
     */
    public function getRoleNameAttribute(): string
    {
        return Lang::get(Role::$roles[$this->role_id]);
    }
}
