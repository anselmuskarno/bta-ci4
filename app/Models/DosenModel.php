<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'tb_chat_dosen_mahasiswa';
    protected $allowedFields = [
        'nama_mhs',
        'nama_dosen1',
        'nama_dosen2',
        'file_chat_ke_dosen1',
        'file_chat_ke_dosen2',
        'file_chat_dosen1_ke_mhs',
        'file_chat_dosen2_ke_mhs',
        'chat_dari_dosen1',
        'chat_dari_dosen2',
        'chat_ke_dosen_2',
        'chat_ke_dosen_1',
        'tanggal_chat_ke_dosen1',
        'tanggal_chat_ke_dosen2',
        'tanggal_chat_dari_dosen2',
        'tanggal_chat_dari_dosen2',
        'status_hapus_chat_dari_dosen1',
        'status_hapus_chat_dari_dosen2',
        'status_hapus_chat_ke_dosen1',
        'status_hapus_chat_ke_dosen2',
        'status_baca_mahasiswa_dari_dosen1',
        'status_baca_mahasiswa_dari_dosen2',
        'status_baca_dosen1',
        'status_baca_dosen2',
        'extensiFile_ke_dosen1',
        'extensiFile_ke_dosen2',
        'extensiFileDosen1_ke_mhs',
        'extensiFileDosen2_ke_mhs'
    ];
}
