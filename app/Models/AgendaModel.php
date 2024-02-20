<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table            = 'agenda';
    protected $primaryKey       = 'id_agenda';
    protected $returnType       = 'object';
    protected $allowedFields    = ['slug_agenda', 'nama_agenda', 'hari_agenda', 'tanggal_agenda', 'jam_agenda', 'tempat_agenda'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'tanggal_update';
}
