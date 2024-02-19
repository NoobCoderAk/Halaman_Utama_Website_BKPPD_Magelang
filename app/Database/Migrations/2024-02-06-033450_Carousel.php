<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carousel extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel carousel_hero
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'caption' => [
                'type'           => 'Varchar',
                'constraint'     => '255'
            ],
            'image'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'default'        => 'image.png',
            ],
            'status'      => [
                'type'           => 'ENUM',
                'constraint'     => ['published', 'draft'],
                'default'        => 'draft',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel carousel_her0
        $this->forge->createTable('carousel_hero', TRUE);
    }

    public function down()
    {
        // menghapus tabel carousel_hero
        $this->forge->dropTable('carousel_hero');
    }
}
