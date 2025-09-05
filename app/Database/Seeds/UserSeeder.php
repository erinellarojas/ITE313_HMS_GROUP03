<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new \App\Models\UserModel();

        $users = [
            [
                'username' => 'admin',
                'email' => 'admin@hospital.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role_id' => 1, // Hospital Administrator
            ],
            [
                'username' => 'doctor1',
                'email' => 'doctor@hospital.com',
                'password' => password_hash('doctor123', PASSWORD_DEFAULT),
                'role_id' => 2, // Doctor
            ],
            [
                'username' => 'nurse1',
                'email' => 'nurse@hospital.com',
                'password' => password_hash('nurse123', PASSWORD_DEFAULT),
                'role_id' => 3, // Nurse
            ],
            [
                'username' => 'receptionist1',
                'email' => 'receptionist@hospital.com',
                'password' => password_hash('receptionist123', PASSWORD_DEFAULT),
                'role_id' => 4, // Receptionist
            ],
            [
                'username' => 'lab1',
                'email' => 'lab@hospital.com',
                'password' => password_hash('lab123', PASSWORD_DEFAULT),
                'role_id' => 5, // Laboratory Staff
            ],
            [
                'username' => 'pharmacist1',
                'email' => 'pharmacist@hospital.com',
                'password' => password_hash('pharmacist123', PASSWORD_DEFAULT),
                'role_id' => 6, // Pharmacist
            ],
            [
                'username' => 'accountant1',
                'email' => 'accountant@hospital.com',
                'password' => password_hash('accountant123', PASSWORD_DEFAULT),
                'role_id' => 7, // Accountant
            ],
            [
                'username' => 'it1',
                'email' => 'it@hospital.com',
                'password' => password_hash('it123', PASSWORD_DEFAULT),
                'role_id' => 8, // IT Staff
            ],
        ];

        foreach ($users as $user) {
            $existing = $userModel->where('username', $user['username'])->orWhere('email', $user['email'])->first();
            if (!$existing) {
                $userModel->insert($user);
            }
        }
    }
}
