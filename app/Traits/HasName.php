<?php

namespace App\Traits;

trait HasName
{
    /**
     * Retrive user first name.
     *
     * @return bool
     */
    public function getFirstNameAttribute(): bool
    {
        return explode(' ', $this->name, 2)[0];
    }

    /**
     * Retrive user initials.
     *
     * @return string
     */
    // public function getInitialsAttribute(): string
    // {
    //     return '';
    // }
}
