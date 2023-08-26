<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'tb_mhs';
    protected $allowedFields = [
        'username_mahasiswa',
        'password_mahasiswa',
        'nama_mahasiswa',
        'nim',
        'nama_dosen_1',
        'nama_dosen_2',
        'nama_kaprodi',
        'acc_dosen1',
        'acc_dosen2',
        'acc_kaprodi',
        'file_skripsi',
        'nama_ujian',
        'judul_ta',
        'nomor_hp',
        'tanggal_input'
    ];
}
