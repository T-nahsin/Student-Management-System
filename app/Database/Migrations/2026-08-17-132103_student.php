<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class student extends Migration
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

            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true,
            ],

            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => 15,
            ],

            'address' => [
                'type' => 'TEXT',
            ],

            'date_of_birth' => [
                'type' => 'DATE',
            ],

            'admission_date' => [
                'type' => 'DATE',
            ],

            'course' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'fees' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'    => 0.00,
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

        $this->forge->createTable('student');
    }

    public function down()
    {
        $this->forge->dropTable('student');
    }
}