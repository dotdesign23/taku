<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Plants extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'guide' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'additional_text' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'image1' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'image2' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => TRUE,
            ],
            'image_vertical' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => TRUE,
            ],
            'category_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('category_id', 'categories', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('plants');
    }

    public function down()
    {
        $this->forge->dropTable('plants');
    }
}
