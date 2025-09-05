<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAppointments extends Migration
{
    public function up()
    {
        // Define fields for appointments table
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'patient_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'doctor_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'appointment_date' => [
                'type' => 'DATETIME',
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'default'    => 'Pending',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // Add primary key
        $this->forge->addKey('id', true);

        // Create the table
        $this->forge->createTable('appointments');
    }

    public function down()
    {
        // Drop the table if rolling back
        $this->forge->dropTable('appointments');
    }
}
