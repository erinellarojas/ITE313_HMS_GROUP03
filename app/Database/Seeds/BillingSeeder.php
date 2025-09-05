<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\BillingModel;

class BillingSeeder extends Seeder
{
    public function run()
    {
        $billingModel = new BillingModel();

        $data = [
            [
                'patient_id' => 1,
                'amount' => 150.00,
                'status' => 'Paid'
            ],
            [
                'patient_id' => 2,
                'amount' => 200.00,
                'status' => 'Pending'
            ]
        ];

        foreach ($data as $item) {
            $billingModel->insert($item);
        }
    }
}
