<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalTabel extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel jadwal
        $this->forge->addField([
            'id_jadwal'            => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'slug_jadwal' => [ //untuk menandai kategori konten apa cth: kategori jadwal ->> kategori-jadwal
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'nama_jadwal'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'hari_jadwal'     => [
                'type'           => 'VARCHAR',
                'constraint'    => '10'
            ],
            'tanggal_jadwal'     => [
                'type'           => 'VARCHAR',
                'constraint'    => '20'
            ],
            'jam_jadwal'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ],
            'tempat_jadwal'      => [
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
        $this->forge->addKey('id_jadwal', TRUE);

        // Membuat tabel carousel_her0
        $this->forge->createTable('jadwal', TRUE);
    }

    public function down()
    {
        // menghapus tabel pengumuman
        $this->forge->dropTable('jadwal');
    }
}
