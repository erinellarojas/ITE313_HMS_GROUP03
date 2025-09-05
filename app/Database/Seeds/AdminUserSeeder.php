<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();

        $data = [
            'username' => 'admin',
            'email'    => 'admin@hospital.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'role_id'  => 1, // 1 = Administrator (base sa RoleSeeder)
            'branch_id'=> 1, // main branch (base sa BranchSeeder)
        ];

        // Check muna kung existing na si admin
        $existing = $userModel->where('email', 'admin@hospital.com')->first();
        if (!$existing) {
            $userModel->insert($data);
        }
    }
}
