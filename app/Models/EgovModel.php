<?php

namespace App\Models;

use CodeIgniter\Model;

class EgovModel extends Model
{
    protected $table            = 'e_goverment';
    protected $primaryKey       = 'id_egov';
    protected $returnType       = 'object';
    protected $allowedFields    = ['slug_egov', 'judul_egov', 'gambar_egov', 'link_egov', 'deskripsi_egov'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'tanggal_update';
}
