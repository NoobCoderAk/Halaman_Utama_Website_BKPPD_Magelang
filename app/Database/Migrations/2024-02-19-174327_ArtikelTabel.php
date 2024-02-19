<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArtikelTabel extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel artikel
        $this->forge->addField([
            'id_artikel'            => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'slug_artikel' => [ //untuk menandai kategori konten apa cth: kategori artikel ->> kategori-artikel
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'kategori_slug' => [ //untuk menandai kategori konten apa cth: kategori artikel ->> kategori-artikel
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'judul_artikel'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'deskripsi_artikel'     => [
                'type'           => 'TEXT',
            ],
            'link_artikel'          => [
                'type'           => 'TEXT',
                'constraint'     => '255'
            ],
            'gambar_artikel'        => [
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
        $this->forge->addKey('id_artikel', TRUE);

        // Membuat tabel carousel_her0
        $this->forge->createTable('artikel', TRUE);
    }

    public function down()
    {
        // menghapus tabel pengumuman
        $this->forge->dropTable('artikel');
    }
}
