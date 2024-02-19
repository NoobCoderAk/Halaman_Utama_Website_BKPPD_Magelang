<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KetegoriKontenController extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel carousel_hero
        $this->forge->addField([
            'id_kategori'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_kategori'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'slug_kategori' => [ //untuk menandai kategori konten apa cth: kategori artikel ->> kategori-artikel
                'type'           => 'VARCHAR',
                'constraint'     => '100'
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
        $this->forge->addKey('id_kategori', TRUE);

        // Membuat tabel carousel_her0
        $this->forge->createTable('kategori_konten', TRUE);
    }

    public function down()
    {
        // menghapus tabel carousel_hero
        $this->forge->dropTable('kategori_konten');
    }
}
