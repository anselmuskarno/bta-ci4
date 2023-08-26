<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'tb_admin';
    protected $allowedFields = ['username_admin', 'password_admin'];

    public function get_data_admin($username_admin, $password_admin)
    {
        return $this->db->table('tb_admin')
            ->where(array('username_admin' => $username_admin, 'password_admin' => $password_admin))
            ->get()->getRowArray();
    }

    public function get_data_kaprodi($username_kaprodi, $password_kaprodi)
    {
        return $this->db->table('tb_kaprodi')
            ->where(array('username_kaprodi' => $username_kaprodi, 'password_kaprodi' => $password_kaprodi))
            ->get()->getRowArray();
    }

    public function get_data_dosen($username_dosen, $password_dosen)
    {
        return $this->db->table('tb_dosen')
            ->where(array('username' => $username_dosen, 'password_dosen' => $password_dosen))
            ->get()->getRowArray();
    }

    public function get_data_mahasiswa($username_mahasiswa, $password_mahasiswa)
    {
        return $this->db->table('tb_mhs')
            ->where(array('username_mahasiswa' => $username_mahasiswa, 'password_mahasiswa' => $password_mahasiswa))
            ->get()->getRowArray();
    }
}
