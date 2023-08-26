<?php

namespace App\Controllers;

use App\Models\LoginModel;

class LoginController extends BaseController
{
    public function cekLogin()
    {
        $login = new LoginModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $jabatan = $this->request->getPost('jabatan');

        if ($jabatan == "mahasiswa") {
            $cek = $login->get_data_mahasiswa($username, $password);
            if ($cek == null) {
                session()->setFlashdata('gagal', 'Username / Password salah');
                return redirect()->to(base_url('/'));
            }
            // return 'ok';
            // return $cek['nama_dosen_1'];
            if (($cek['username_mahasiswa'] == $username) && ($cek['password_mahasiswa'] == $password)) {
                session()->set('username_mahasiswa', $cek['username_mahasiswa']);
                session()->set('nama_mahasiswa', $cek['nama_mahasiswa']);
                session()->set('id_mahasiswa', $cek['id']);
                session()->set('nama_dosen_1', $cek['nama_dosen_1']);
                session()->set('jabatan_1', "Dosen Pembimbing 1");
                session()->set('jabatan_2', "Dosen Pembimbing 2");
                session()->set('accDosen1', $cek['acc_dosen1']);
                session()->set('namaUjian', $cek['nama_ujian']);
                session()->set('accDosen2', $cek['acc_dosen2']);
                session()->set('nama_dosen_2', $cek['nama_dosen_2']);
                session()->set('nama_kaprodi', $cek['nama_kaprodi']);
                return redirect()->to(base_url('/chatDosen'));
            } else {
                session()->setFlashdata('gagal', 'Username / Password salah');
                return redirect()->to(base_url('login'));
            }
        }

        if ($jabatan == "admin") {
            $cek = $login->get_data_admin($username, $password);
            if ($cek == null) {
                session()->setFlashdata('gagal', 'Username / Password salah');
                return redirect()->to(base_url('/'));
            }
            // return 'ok';
            // return $cek['nama_dosen_1'];
            if (($cek['username_admin'] == $username) && ($cek['password_admin'] == $password)) {
                // return "berhasil login admin";
                session()->set('username_admin', $cek['username_admin']);
                session()->set('id_dosen', $cek['id']);
                // session()->set('nama_dosen_1', $cek['nama_dosen_1']);
                // session()->set('jabatan_1', "Dosen Pembimbing 1");
                // session()->set('jabatan_2', "Dosen Pembimbing 2");
                // session()->set('nama_dosen_2', $cek['nama_dosen_2']);
                // session()->set('nama_kaprodi', $cek['nama_kaprodi']);
                return redirect()->to(base_url('/adminProposal'));
            } else {
                session()->setFlashdata('gagal', 'Username / Password salah');
                return redirect()->to(base_url('login'));
            }
        }

        if ($jabatan == "kaprodi") {
            $cek = $login->get_data_kaprodi($username, $password);
            if ($cek == null) {
                session()->setFlashdata('gagal', 'Username / Password salah');
                return redirect()->to(base_url('/'));
            }
            // return 'okmbiakkkkkk';
            // return $cek['nama_dosen_1'];
            if (($cek['username_kaprodi'] == $username) && ($cek['password_kaprodi'] == $password)) {
                // return "berhasil login admin";
                session()->set('username_kaprodi', $cek['username_kaprodi']);
                session()->set('nama_kaprodi', $cek['nama_kaprodi']);
                session()->set('id_dosen', $cek['id']);

                return redirect()->to(base_url('/kaprodiDosen'));
            } else {
                session()->setFlashdata('gagal', 'Username / Password salah');
                return redirect()->to(base_url('login'));
            }
        }

        if ($jabatan == "dosen") {
            // return 'ok';
            $cek = $login->get_data_dosen($username, $password);
            if ($cek == null) {
                session()->setFlashdata('gagal', 'Username / Password salah');
                return redirect()->to(base_url('/'));
            }
            // return 'ok';
            // return $cek['nama_dosen_1'];
            if (($cek['username'] == $username) && ($cek['password_dosen'] == $password)) {
                // return "berhasil login admin";
                session()->set('username_dosen', $cek['username']);
                session()->set('nama_dosen', $cek['nama_dosen']);
                session()->set('id_dosen', $cek['id']);
                // session()->set('nama_dosen_1', $cek['nama_dosen_1']);
                // session()->set('jabatan_1', "Dosen Pembimbing 1");
                // session()->set('jabatan_2', "Dosen Pembimbing 2");
                // session()->set('nama_dosen_2', $cek['nama_dosen_2']);
                // session()->set('nama_kaprodi', $cek['nama_kaprodi']);
                return redirect()->to(base_url('/dosenHasil'));
            } else {
                session()->setFlashdata('gagal', 'Username / Password salah');
                return redirect()->to(base_url('login'));
            }
        }
    }
}
