<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\AppointmentModel;

class AppointmentSeeder extends Seeder
{
    public function run()
    {
        $appointmentModel = new AppointmentModel();

        $data = [
            [
                'patient_id' => 1,
                'doctor_id' => 1,
                'appointment_date' => '2023-10-01 10:00:00',
                'status' => 'Scheduled'
            ],
            [
                'patient_id' => 2,
                'doctor_id' => 2,
                'appointment_date' => '2023-10-02 14:00:00',
                'status' => 'Completed'
            ]
        ];

        foreach ($data as $item) {
            $appointmentModel->insert($item);
        }
    }
}
