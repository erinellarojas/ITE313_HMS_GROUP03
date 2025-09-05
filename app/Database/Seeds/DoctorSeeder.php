<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\DoctorModel;

class DoctorSeeder extends Seeder
{
    public function run()
    {
        $doctorModel = new DoctorModel();

        $data = [
            [
                'name' => 'Dr. John Doe',
                'specialization' => 'Cardiology',
                'phone' => '123-456-7890',
                'email' => 'john.doe@hospital.com'
            ],
            [
                'name' => 'Dr. Jane Smith',
                'specialization' => 'Neurology',
                'phone' => '098-765-4321',
                'email' => 'jane.smith@hospital.com'
            ]
        ];

        foreach ($data as $doctor) {
            $existing = $doctorModel->where('email', $doctor['email'])->first();
            if (!$existing) {
                $doctorModel->insert($doctor);
            }
        }
    }
}
