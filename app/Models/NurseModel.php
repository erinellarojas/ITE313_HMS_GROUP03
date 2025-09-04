<?php

namespace App\Models;

use CodeIgniter\Model;

class NurseModel extends Model
{
    protected $table      = 'nurses';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'department', 'phone', 'email'];

    protected $useTimestamps = true;
}
