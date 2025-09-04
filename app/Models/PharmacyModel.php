<?php

namespace App\Models;

use CodeIgniter\Model;

class PharmacyModel extends Model
{
    protected $table      = 'pharmacy';
    protected $primaryKey = 'id';

    protected $allowedFields = ['patient_id', 'medicine_name', 'quantity', 'status'];

    protected $useTimestamps = true;
}
