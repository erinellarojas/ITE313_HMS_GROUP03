<?php

namespace App\Models;

use CodeIgniter\Model;

class BillingModel extends Model
{
    protected $table      = 'billing';
    protected $primaryKey = 'id';

    protected $allowedFields = ['patient_id', 'amount', 'status'];

    protected $useTimestamps = true;
}
