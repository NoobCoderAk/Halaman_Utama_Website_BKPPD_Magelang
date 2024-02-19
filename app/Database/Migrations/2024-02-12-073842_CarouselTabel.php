<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CarouselModel extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel carousel_hero
        $this->forge->addField([
            'id_carousel'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'slug_carousel' => [ //untuk menandai kategori konten apa cth: kategori artikel ->> kategori-artikel
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'kategori_slug' => [ //untuk menandai kategori konten apa cth: kategori artikel ->> kategori-artikel
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'judul_carousel'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'gambar_carousel'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'deskripsi_carousel'       => [
                'type'           => 'TEXT',
            ],
            'tanggal_input'      => [
                'type'           => 'DATETIME',
                'null'           => true
            ],
            'tanggal_update'      => [
                'type'           => 'DATETIME',
                'null'           => true
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id_carousel', TRUE);

        // Membuat tabel carousel_her0
        $this->forge->createTable('carousel', TRUE);
    }

    public function down()
    {
        // menghapus tabel carousel_hero
        $this->forge->dropTable('carousel');
    }
}
