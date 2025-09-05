<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\LaboratoryModel;

class LaboratorySeeder extends Seeder
{
    public function run()
    {
        $labModel = new LaboratoryModel();

        $data = [
            [
                'patient_id' => 1,
                'test_name' => 'Blood Test',
                'result' => 'Normal',
                'status' => 'Completed'
            ],
            [
                'patient_id' => 2,
                'test_name' => 'X-Ray',
                'result' => 'No issues',
                'status' => 'Completed'
            ]
        ];

        foreach ($data as $item) {
            $labModel->insert($item);
        }
    }
}
