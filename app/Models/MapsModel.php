<?php

namespace App\Models;

use CodeIgniter\Model;

class MapsModel extends Model
{
    protected $table            = 'maps';
    protected $primaryKey       = 'id_maps';
    protected $returnType       = 'object';
    protected $allowedFields    = ['slug_maps', 'nama_maps', 'link_maps'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'tanggal_update';
}
