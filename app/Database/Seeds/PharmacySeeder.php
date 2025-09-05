<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\PharmacyModel;

class PharmacySeeder extends Seeder
{
    public function run()
    {
        $pharmacyModel = new PharmacyModel();

        $data = [
            [
                'patient_id' => 1,
                'medicine_name' => 'Aspirin',
                'quantity' => 10,
                'status' => 'Dispensed'
            ],
            [
                'patient_id' => 2,
                'medicine_name' => 'Ibuprofen',
                'quantity' => 20,
                'status' => 'Pending'
            ]
        ];

        foreach ($data as $item) {
            $pharmacyModel->insert($item);
        }
    }
}
