<?php

namespace App\Models;

use CodeIgniter\Model;

class PatientsModel extends Model
{
    protected $table      = 'patients'; // pangalan ng table sa database
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'age', 'gender', 'contact', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
}
