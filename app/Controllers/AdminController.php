<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\DaftarDosenModal;
use App\Models\PengumumanModel;

class AdminController extends BaseController
{
    public $mahasiswaModel;
    public $daftarDosenModel;
    public $pengumumanModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->daftarDosenModel = new DaftarDosenModal();
        $this->pengumumanModel = new PengumumanModel();
    }

    public function tambahMahasiswa()
    {
        // return $this->request->getVar('tanggal_input');
        $this->mahasiswaModel->save([
            'username_mahasiswa' => $this->request->getVar('username_mahasiswa'),
            'password_mahasiswa' => $this->request->getVar('password_mahasiswa'),
            'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
            'nim' => $this->request->getVar('nim'),
            'judul_ta' => $this->request->getVar('judul_ta'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'nama_dosen_1' => $this->request->getVar('nama_dosen_1'),
            'nama_dosen_2' => $this->request->getVar('nama_dosen_2'),
            'nama_kaprodi' => $this->request->getVar('nama_kaprodi'),
            'acc_dosen1' => $this->request->getVar('acc_dosen1'),
            'acc_dosen2' => $this->request->getVar('acc_dosen2'),
            'acc_kaprodi' => $this->request->getVar('acc_kaprodi'),
            'file_skripsi' => $this->request->getVar('file_skripsi'),
            'nama_ujian' => $this->request->getVar('nama_ujian'),
            'tanggal_input' => $this->request->getVar('tanggal_input')
        ]);
        return redirect()->to(base_url() . 'adminMahasiswa');
    }

    public function tambahDosen()
    {
        $this->daftarDosenModel->save([
            'username' => $this->request->getVar('username'),
            'password_dosen' => $this->request->getVar('password_dosen'),
            'nama_dosen' => $this->request->getVar('nama_dosen'),
        ]);
        return redirect()->to(base_url() . 'daftarDosen');
    }

    public function tambahPengumuman()
    {
        // return 'ok';
        $filePengumuman = $this->request->getFile('file_pengumuman');
        $filePengumuman->move('uploadedFile');
        $namaFile = $filePengumuman->getName();
        $this->pengumumanModel->save([
            'judul_pengumuman' => $this->request->getVar('judul_pengumuman'),
            'isi_pengumuman' => $this->request->getVar('isi_pengumuman'),
            'file_pengumuman' => $namaFile
        ]);
        return redirect()->to(base_url() . 'adminPengumuman');
    }

    public function pindahKeTutup($id)
    {
        // return $id;
        // ambil artikel yang akan diedit
        $mahasiswa = new MahasiswaModel();
        $data['mahasiswa'] = $mahasiswa->where('id', $id)->first();

        // return $data['dosen']['file_chat_ke_dosen2'];

        $mahasiswa->update($id, [
            'username_mahasiswa' => $data['mahasiswa']['username_mahasiswa'],
            'password_mahasiswa' => $data['mahasiswa']['password_mahasiswa'],
            'nama_mahasiswa' => $data['mahasiswa']['nama_mahasiswa'],
            'nim' => $data['mahasiswa']['nim'],
            'nama_dosen_1' => $data['mahasiswa']['nama_dosen_1'],
            'nama_dosen_2' => $data['mahasiswa']['nama_dosen_2'],
            'nama_kaprodi' => $data['mahasiswa']['nama_kaprodi'],
            'acc_dosen1' => "0",
            'acc_dosen2' => "0",
            'acc_kaprodi' => "0",
            'file_skripsi' => "",
            'nama_ujian' => "tutup"

        ]);
        // return 'ok';
        return redirect()->to(base_url() . 'adminHasil');
    }

    public function pindahKeHasil($id)
    {
        // return $id;
        // ambil artikel yang akan diedit
        $mahasiswa = new MahasiswaModel();
        $data['mahasiswa'] = $mahasiswa->where('id', $id)->first();

        // return $data['dosen']['file_chat_ke_dosen2'];

        $mahasiswa->update($id, [
            'username_mahasiswa' => $data['mahasiswa']['username_mahasiswa'],
            'password_mahasiswa' => $data['mahasiswa']['password_mahasiswa'],
            'nama_mahasiswa' => $data['mahasiswa']['nama_mahasiswa'],
            'nim' => $data['mahasiswa']['nim'],
            'nama_dosen_1' => $data['mahasiswa']['nama_dosen_1'],
            'nama_dosen_2' => $data['mahasiswa']['nama_dosen_2'],
            'nama_kaprodi' => $data['mahasiswa']['nama_kaprodi'],
            'acc_dosen1' => "0",
            'acc_dosen2' => "0",
            'acc_kaprodi' => "0",
            'file_skripsi' => "",
            'nama_ujian' => "semhas"

        ]);
        // return 'ok';
        return redirect()->to(base_url() . 'adminProposal');
    }

    public function editmhs()
    {
        // return $this->request->getVar('namamhs');
        // return $id;
        // ambil artikel yang akan diedit
        $mahasiswa = new MahasiswaModel();
        $data['mahasiswa'] = $mahasiswa->where('id', $this->request->getVar('id'))->first();

        // return $data['dosen']['file_chat_ke_dosen2'];

        $mahasiswa->update($this->request->getVar('id'), [
            'username_mahasiswa' => $this->request->getVar('username_mahasiswa'),
            'password_mahasiswa' => $this->request->getVar('password_mahasiswa'),
            'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
            'nim' => $this->request->getVar('nim'),
            'judul_ta' => $this->request->getVar('judul_ta'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'nama_dosen_1' => $this->request->getVar('nama_dosen_1'),
            'nama_dosen_2' => $this->request->getVar('nama_dosen_2'),
            'nama_kaprodi' => $this->request->getVar('nama_kaprodi'),
            'acc_dosen1' => $this->request->getVar('acc_dosen1'),
            'acc_dosen2' => $this->request->getVar('acc_dosen2'),
            'acc_kaprodi' => $this->request->getVar('acc_kaprodi'),
            'file_skripsi' => $this->request->getVar('file_skripsi'),
            'nama_ujian' => $this->request->getVar('nama_ujian'),

        ]);
        // return 'ok';
        return redirect()->to(base_url() . 'adminMahasiswa');
    }

    public function deleteMahasiswaTutup($id)
    {

        $this->mahasiswaModel->delete($id);
        return redirect()->to(base_url() . 'adminTutup');
    }

    public function deleteMahasiswaHasil($id)
    {

        $this->mahasiswaModel->delete($id);
        return redirect()->to(base_url() . 'adminHasil');
    }

    public function deleteMahasiswaProposal($id)
    {

        $this->mahasiswaModel->delete($id);
        return redirect()->to(base_url() . 'adminMahasiswa');
    }

    public function deleteDosen($id)
    {

        $this->daftarDosenModel->delete($id);
        return redirect()->to(base_url() . 'daftarDosen');
    }
    public function deletePengumuman($id)
    {
        $dosen = new PengumumanModel();
        $data['pengumuman'] = $dosen->where('id', $id)->first();
        if ($data['pengumuman']['file_pengumuman'] != null) {
            unlink('uploadedFile/' .  $data['pengumuman']['file_pengumuman']);
        }
        $this->pengumumanModel->delete($id);
        return redirect()->to(base_url() . 'adminPengumuman');
    }

    public function index()
    {
        $mahasiswa = $this->mahasiswaModel->where('nama_ujian', 'proposal')->findAll();
        $data = [
            'mahasiswa' => $mahasiswa
        ];
        return view('adminDashboard', $data);
    }

    public function proposal()
    {
        $mahasiswa = $this->mahasiswaModel->where('nama_ujian', 'proposal')->findAll();
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'mahasiswa' => $mahasiswa,
            'dosen' => $daftarDosen
        ];
        return view('adminPoposal', $data);
    }

    public function daftarDosen()
    {
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'dosen' => $daftarDosen
        ];
        return view('adminDosen', $data);
    }

    public function adminPengumuman()
    {
        // return 'ok'
        $pengumuman = $this->pengumumanModel->findAll();
        $data = [
            'pengumuman' => $pengumuman
        ];
        return view('adminPengumuman', $data);
    }

    public function pengumumanMahasiswa()
    {
        $pengumuman = $this->pengumumanModel->findAll();
        $data = [
            'pengumuman' => $pengumuman
        ];
        return view('pengumumanMahasiswa', $data);
    }

    public function kaprodiDosen()
    {
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'dosen' => $daftarDosen
        ];
        return view('kaprodiDosen', $data);
    }

    public function adminMahasiswa()
    {
        // $builder->orderBy('title DESC, name ASC');
        $daftarMahasiswa = $this->mahasiswaModel->orderBy('id', 'DESC')->findAll();
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswa,
            'dosen' => $daftarDosen
        ];
        return view('adminMahasiswa', $data);
    }

    public function cetakMhs()
    {
        // $builder->orderBy('title DESC, name ASC');
        $daftarMahasiswa = $this->mahasiswaModel->orderBy('id', 'DESC')->findAll();
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswa,
            'dosen' => $daftarDosen
        ];
        return view('cetakMhs', $data);
    }

    public function cetakMhsACCProposal()
    {
        // $builder->orderBy('title DESC, name ASC');
        $daftarMahasiswaACC = $this->mahasiswaModel->where(array('nama_ujian' => "proposal", 'acc_dosen1' => "1", 'acc_dosen2' => "1", 'acc_kaprodi' => "1"))->findAll();
        $daftarMahasiswa = $this->mahasiswaModel->orderBy('id', 'DESC')->findAll();
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswaACC,
            'dosen' => $daftarDosen
        ];
        return view('cetakMhsACC', $data);
    }

    public function cetakMhsBelumACCProposal()
    {
        // $builder->orderBy('title DESC, name ASC');
        $daftarMahasiswaBelumACC = $this->mahasiswaModel->where(array('acc_dosen1' => "0", 'acc_dosen2' => "0"))->findAll();
        $daftarMahasiswa = $this->mahasiswaModel->orderBy('id', 'DESC')->findAll();
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswaBelumACC,
            'dosen' => $daftarDosen
        ];
        return view('cetakMhsBelumACC', $data);
    }


    public function cetakMhsACCHasil()
    {
        // $builder->orderBy('title DESC, name ASC');
        $daftarMahasiswaACC = $this->mahasiswaModel->where(array('nama_ujian' => "semhas", 'acc_dosen1' => "1", 'acc_dosen2' => "1", 'acc_kaprodi' => "1"))->findAll();
        $daftarMahasiswa = $this->mahasiswaModel->orderBy('id', 'DESC')->findAll();
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswaACC,
            'dosen' => $daftarDosen
        ];
        return view('cetakMhsACC', $data);
    }

    public function cetakMhsBelumACCHasil()
    {
        // $builder->orderBy('title DESC, name ASC');
        $daftarMahasiswaBelumACC = $this->mahasiswaModel->where('nama_ujian', 'semhas')->findAll();
        $daftarMahasiswa = $this->mahasiswaModel->orderBy('id', 'DESC')->findAll();
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswaBelumACC,
            'dosen' => $daftarDosen
        ];
        return view('cetakMhsBelumACC', $data);
    }

    public function cetakMhsACCTutup()
    {
        // $builder->orderBy('title DESC, name ASC');
        $daftarMahasiswaACC = $this->mahasiswaModel->where(array('nama_ujian' => "tutup", 'acc_dosen1' => "1", 'acc_dosen2' => "1", 'acc_kaprodi' => "1"))->findAll();
        $daftarMahasiswa = $this->mahasiswaModel->orderBy('id', 'DESC')->findAll();
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswaACC,
            'dosen' => $daftarDosen
        ];
        return view('cetakMhsACC', $data);
    }

    public function cetakMhsBelumACCTutup()
    {
        // $builder->orderBy('title DESC, name ASC');
        $daftarMahasiswaBelumACC = $this->mahasiswaModel->where('nama_ujian', 'tutup')->findAll();
        $daftarMahasiswa = $this->mahasiswaModel->orderBy('id', 'DESC')->findAll();
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswaBelumACC,
            'dosen' => $daftarDosen
        ];
        return view('cetakMhsBelumACC', $data);
    }


    public function kaprodiMahasiswa()
    {
        // $builder->orderBy('title DESC, name ASC');
        $daftarMahasiswa = $this->mahasiswaModel->orderBy('id', 'DESC')->findAll();
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswa,
            'dosen' => $daftarDosen
        ];
        return view('kaprodiMahasiswa', $data);
    }

    public function kaprodiProposal()
    {
        $daftarMahasiswa = $this->mahasiswaModel->where('nama_ujian', 'proposal')->findAll();
        $daftarDosen = $this->daftarDosenModel->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswa,
            'dosen' => $daftarDosen
        ];
        return view('kaprodiProposal', $data);
    }

    public function kaprodiHasil()
    {
        $daftarMahasiswa = $this->mahasiswaModel->where('nama_ujian', 'semhas')->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswa
        ];
        return view('kaprodiHasil', $data);
    }

    public function kaprodiTutup()
    {
        $daftarMahasiswa = $this->mahasiswaModel->where('nama_ujian', 'tutup')->findAll();
        $data = [
            'mahasiswa' => $daftarMahasiswa
        ];
        return view('kaprodiTutup', $data);
    }

    public function hasil()
    {
        $mahasiswa = $this->mahasiswaModel->where('nama_ujian', 'semhas')->findAll();
        $data = [
            'mahasiswa' => $mahasiswa
        ];
        return view('adminHasil', $data);
    }

    public function tutup()
    {
        $mahasiswa = $this->mahasiswaModel->where('nama_ujian', 'tutup')->findAll();
        $data = [
            'mahasiswa' => $mahasiswa
        ];
        return view('adminTutup', $data);
    }
}
