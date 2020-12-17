<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    const ADMIN = 1;
    const USER = 2;

    public static $roles = [
        self::ADMIN => 'Admin',
        self::USER => 'User',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    } 
}
