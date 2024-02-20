<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table            = 'jadwal';
    protected $primaryKey       = 'id_jadwal';
    protected $returnType       = 'object';
    protected $allowedFields    = ['slug_jadwal', 'nama_jadwal', 'hari_jadwal', 'tanggal_jadwal', 'jam_jadwal', 'tempat_jadwal'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'tanggal_update';
}
