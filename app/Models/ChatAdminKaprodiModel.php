<?php

namespace App\Models;

use CodeIgniter\Model;

class ChatAdminKaprodiModel extends Model
{
    protected $table = 'tb_chat_admin_kaprodi';
    protected $allowedFields = [
        'nama_admin',
        'nama_kaprodi',
        'isi_chat_kaprodi',
        'isi_chat_admin',
        'file_chat_kaprodi',
        'file_chat_admin',
        'status_hapus_chat_kaprodi',
        'status_hapus_chat_admin',
        'extensiFile_chat_admin',
        'extensiFile_chat_kaprodi'
    ];
}
