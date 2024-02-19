<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table            = 'artikel';
    protected $primaryKey       = 'id_artikel';
    protected $returnType       = 'object';
    protected $allowedFields    = ['slug_artikel', 'judul_artikel', 'gambar_artikel', 'link_artikel', 'deskripsi_artikel'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'tanggal_update';
}
