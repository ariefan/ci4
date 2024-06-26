<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table = 'peserta';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'alamat', 'tanggal_lahir'];
}
