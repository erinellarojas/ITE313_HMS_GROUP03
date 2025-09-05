<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('RoleSeeder');
        $this->call('UserSeeder');
        $this->call('DoctorSeeder');
        $this->call('PatientSeeder');
        $this->call('NurseSeeder');
        $this->call('PharmacySeeder');
        $this->call('LaboratorySeeder');
        $this->call('BillingSeeder');
        $this->call('AppointmentSeeder');
    }
}
