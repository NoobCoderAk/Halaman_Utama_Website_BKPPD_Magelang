<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MapsTabel extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel maps
        $this->forge->addField([
            'id_maps'            => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'slug_maps' => [ //untuk menandai kategori konten apa cth: kategori maps ->> kategori-maps
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'nama_maps'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'link_maps'     => [
                'type'           => 'VARCHAR',
                'constraint'    => '10'
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
        $this->forge->addKey('id_maps', TRUE);

        // Membuat tabel carousel_her0
        $this->forge->createTable('maps', TRUE);
    }

    public function down()
    {
        // menghapus tabel pengumuman
        $this->forge->dropTable('maps');
    }
}
