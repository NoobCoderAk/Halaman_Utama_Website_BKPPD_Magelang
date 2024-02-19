<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EgovTabel extends Migration
{
    public function up()
    {
        //
        // Membuat kolom/field untuk tabel carousel_hero
        $this->forge->addField([
            'id_egov'            => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'slug_egov' => [ //untuk menandai kategori konten apa cth: kategori artikel ->> kategori-artikel
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'kategori_slug' => [ //untuk menandai kategori konten apa cth: kategori artikel ->> kategori-artikel
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'judul_egov'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'deskripsi_egov'     => [
                'type'           => 'TEXT',
            ],
            'link_egov'          => [
                'type'           => 'TEXT',
                'constraint'     => '255'
            ],
            'gambar_egov'        => [
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
        $this->forge->addKey('id_egov', TRUE);

        // Membuat tabel carousel_her0
        $this->forge->createTable('e_goverment', TRUE);
    }

    public function down()
    {
        // menghapus tabel carousel_hero
        $this->forge->dropTable('e_goverment');
    }
}
