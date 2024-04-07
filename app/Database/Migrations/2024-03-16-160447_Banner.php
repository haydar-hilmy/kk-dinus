<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class Banner extends Migration
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
            'id_kk' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'visibility' => [
                'type' => 'ENUM',
                'constraint' => ['1', '1']
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
                'on update' => 'CURRENT_TIMESTAMP'
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('banner');
    }

    public function down()
    {
        $this->forge->dropTable('banner');
    }
}
