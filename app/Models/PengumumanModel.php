<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table            = 'pengumuman';
    protected $primaryKey       = 'id_pengumuman';
    protected $returnType       = 'object';
    protected $allowedFields    = ['slug_pengumuman', 'judul_pengumuman', 'gambar_pengumuman', 'link_pengumuman', 'deskripsi_pengumuman'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'tanggal_update';
}
