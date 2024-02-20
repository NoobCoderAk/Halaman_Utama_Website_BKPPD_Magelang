<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgendaTabel extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel agenda
        $this->forge->addField([
            'id_agenda'            => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'slug_agenda' => [ //untuk menandai kategori konten apa cth: kategori agenda ->> kategori-agenda
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'nama_agenda'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'hari_agenda'     => [
                'type'           => 'VARCHAR',
                'constraint'    => '10'
            ],
            'tanggal_agenda'     => [
                'type'           => 'VARCHAR',
                'constraint'    => '20'
            ],
            'jam_agenda'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ],
            'tempat_agenda'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
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
        $this->forge->addKey('id_agenda', TRUE);

        // Membuat tabel carousel_her0
        $this->forge->createTable('agenda', TRUE);
    }

    public function down()
    {
        // menghapus tabel pengumuman
        $this->forge->dropTable('agenda');
    }
}
