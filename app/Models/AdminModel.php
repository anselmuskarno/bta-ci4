<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'tb_admin';
    protected $allowedFields = ['username_admin', 'password_admin'];

    public function get_data($username_admin, $password_admin)
    {
        return $this->db->table('tb_admin')
            ->where(array('username_admin' => $username_admin, 'password_admin' => $password_admin))
            ->get()->getRowArray();
    }
}
