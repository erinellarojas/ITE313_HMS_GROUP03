<?php

namespace App\Models;

use CodeIgniter\Model;

class LaboratoryModel extends Model
{
    protected $table      = 'laboratory';
    protected $primaryKey = 'id';

    protected $allowedFields = ['patient_id', 'test_name', 'result', 'status'];

    protected $useTimestamps = true;
}
