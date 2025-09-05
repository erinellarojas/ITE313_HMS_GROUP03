<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Assuming your users table is named 'users'
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'username',
        'email',
        'password',
        'role',
        'role_id'
    ];

    protected $useTimestamps = true;

    protected $hidden = [
        'password'
    ];
}
