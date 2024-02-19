<?php

namespace App\Models;

use CodeIgniter\Model;

class CarouselModel extends Model
{
    protected $table            = 'carousel';
    protected $primaryKey       = 'id_carousel';
    protected $returnType       = 'object';
    protected $allowedFields    = ['slug_carousel', 'judul_carousel', 'gambar_carousel', 'deskripsi_carousel'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'tanggal_update';
}
