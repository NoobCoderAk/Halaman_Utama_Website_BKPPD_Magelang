<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengumumanTabel extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel pengumuman
        $this->forge->addField([
            'id_pengumuman'            => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'slug_pengumuman' => [ //untuk menandai kategori konten apa cth: kategori pengumuman ->> kategori-pengumuman
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'kategori_slug' => [ //untuk menandai kategori konten apa cth: kategori pengumuman ->> kategori-pengumuman
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'judul_pengumuman'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'deskripsi_pengumuman'     => [
                'type'           => 'TEXT',
            ],
            'link_pengumuman'          => [
                'type'           => 'TEXT',
                'constraint'     => '255'
            ],
            'gambar_pengumuman'        => [
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
        $this->forge->addKey('id_pengumuman', TRUE);

        // Membuat tabel carousel_her0
        $this->forge->createTable('pengumuman', TRUE);
    }

    public function down()
    {
        // menghapus tabel pengumuman
        $this->forge->dropTable('pengumuman');
    }
}
