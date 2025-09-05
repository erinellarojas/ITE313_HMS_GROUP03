<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'name' => 'Hospital Administrator',
                'description' => 'Full control, user management, reports, and branch integration',
            ],
            [
                'name' => 'Doctor',
                'description' => 'Access/update patient records, create prescriptions, request tests',
            ],
            [
                'name' => 'Nurse',
                'description' => 'Patient monitoring, treatment updates',
            ],
            [
                'name' => 'Receptionist',
                'description' => 'Patient registration, appointment booking',
            ],
            [
                'name' => 'Laboratory Staff',
                'description' => 'Manage test requests, enter results',
            ],
            [
                'name' => 'Pharmacist',
                'description' => 'Track and dispense medicines',
            ],
            [
                'name' => 'Accountant',
                'description' => 'Handle billing, payments, and insurance claims',
            ],
            [
                'name' => 'IT Staff',
                'description' => 'System maintenance, security, and backups',
            ],
        ];

        foreach ($roles as $role) {
            $existing = $this->db->table('roles')->where('name', $role['name'])->get()->getRowArray();
            if (!$existing) {
                $this->db->table('roles')->insert($role);
            }
        }
    }
}
