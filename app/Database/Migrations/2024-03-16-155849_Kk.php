<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'shortName' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'fullName' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'nip' => [
                'type' => 'CHAR',
                'constraint' => '16',
                'null' => false
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'role' => [
                'type' => 'ENUM("superadmin", "kk")',
                'default' => 'kk',
                'null' => false
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kk');
    }

    public function down()
    {
        $this->forge->dropTable('kk');
    }
}
