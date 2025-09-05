<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePharmacy extends Migration
{
    public function up()
    {
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
            ],
            'medicine_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'default'    => 'pending',
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

        $this->forge->addKey('id', true);
        $this->forge->createTable('pharmacy');
    }

    public function down()
    {
        $this->forge->dropTable('pharmacy');
    }
}

