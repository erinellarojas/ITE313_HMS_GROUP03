<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\PatientsModel;

class PatientSeeder extends Seeder
{
    public function run()
    {
        $patientModel = new PatientsModel();

        $data = [
            [
                'name' => 'Alice Johnson',
                'age' => 30,
                'gender' => 'Female',
                'contact' => '555-123-4567'
            ],
            [
                'name' => 'Bob Brown',
                'age' => 45,
                'gender' => 'Male',
                'contact' => '555-987-6543'
            ]
        ];

        foreach ($data as $patient) {
            $patientModel->insert($patient);
        }
    }
}
