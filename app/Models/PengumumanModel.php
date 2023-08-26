<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table = 'tb_pengumuman';
    protected $allowedFields = [
        'judul_pengumuman',
        'isi_pengumuman',
        'file_pengumuman'
    ];
}
