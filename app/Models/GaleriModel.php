<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table            = 'galeri';
    protected $primaryKey       = 'id_galeri';
    protected $returnType       = 'object';
    protected $allowedFields    = ['slug_galeri', 'judul_galeri', 'gambar_galeri', 'link_galeri', 'deskripsi_galeri'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'tanggal_update';
}
