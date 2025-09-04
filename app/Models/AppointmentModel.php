<?php

namespace App\Models;

use CodeIgniter\Model;

class AppointmentModel extends Model
{
    protected $table      = 'appointments';
    protected $primaryKey = 'id';

    protected $useTimestamps = true; // Para automatic na ma-fill ang created_at at updated_at

    protected $allowedFields = [
        'patient_id',
        'doctor_id',
        'appointment_date',
        'status',
    ];
}
