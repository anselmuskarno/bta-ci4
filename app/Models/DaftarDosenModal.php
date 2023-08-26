<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarDosenModal extends Model
{
    protected $table = 'tb_dosen';
    protected $allowedFields = ['username', 'password_dosen', 'nama_dosen'];
}
