<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\NurseModel;

class NurseSeeder extends Seeder
{
    public function run()
    {
        $nurseModel = new NurseModel();

        $data = [
            [
                'name' => 'Nurse Emily',
                'department' => 'Emergency',
                'phone' => '555-111-2222',
                'email' => 'emily.nurse@hospital.com'
            ],
            [
                'name' => 'Nurse Michael',
                'department' => 'Surgery',
                'phone' => '555-333-4444',
                'email' => 'michael.nurse@hospital.com'
            ]
        ];

        foreach ($data as $nurse) {
            $existing = $nurseModel->where('email', $nurse['email'])->first();
            if (!$existing) {
                $nurseModel->insert($nurse);
            }
        }
    }
}
