<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Todo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'todo_id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'todo_title' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'todo_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('todo_id', true);
        $this->forge->createTable('todo');
    }
    public function down()
    {
        $this->forge->dropTable('todo');
    }
}
