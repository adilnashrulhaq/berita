<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'user';

    protected $fillable = [
        'fullname',
        'username',
        'password',
        'role',
        'deleted_at',
    ];

    protected $hidden = [
        'password',
    ];
}
