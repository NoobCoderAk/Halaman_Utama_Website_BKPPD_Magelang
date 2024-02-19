<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GaleriTabel extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel galeri
        $this->forge->addField([
            'id_galeri'            => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'slug_galeri' => [ //untuk menandai kategori konten apa cth: kategori artikel ->> kategori-artikel
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'kategori_slug' => [ //untuk menandai kategori konten apa cth: kategori artikel ->> kategori-artikel
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'judul_galeri'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'deskripsi_galeri'     => [
                'type'           => 'TEXT',
            ],
            'link_galeri'          => [
                'type'           => 'TEXT',
                'constraint'     => '255'
            ],
            'gambar_galeri'        => [
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
        $this->forge->addKey('id_galeri', TRUE);

        // Membuat tabel carousel_her0
        $this->forge->createTable('galeri', TRUE);
    }

    public function down()
    {
        // menghapus tabel galeri
        $this->forge->dropTable('galeri');
    }
}
