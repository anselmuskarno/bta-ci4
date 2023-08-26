<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\ChatAdminKaprodiModel;

class MahasiswaController extends BaseController
{
    public $mahasiswaModel;
    public $chatAdminKaprodiModel;
    public function __construct()
    {
        $this->mahasiswaModel = new DosenModel();
        $this->chatAdminKaprodiModel = new chatAdminKaprodiModel();
    }

    public function index()
    {
        $dosen = $this->mahasiswaModel->findAll();
        // return $dosen[0]['nama_dosen'];
        $data = [
            'dosen' => $dosen
        ];
        return view('chatDosen', $data);
    }

    public function index2()
    {
        $namaDosen = session()->get('nama_dosen_2');
        $namaMhs = session()->get('nama_mahasiswa');
        $where =  "nama_dosen2='$namaDosen' AND nama_mhs='$namaMhs'";
        $dosen = $this->mahasiswaModel->where($where)->findAll();
        $data = [
            'dosen' => $dosen
        ];
        return view('chatDosen2', $data);
    }

    public function index4()
    {
        // $namaDosen = session()->get('nama_dosen_2');
        // $namaMhs = session()->get('nama_kaprodi');
        // $where =  "nama_dosen2='$namaDosen' AND nama_mhs='$namaMhs'";
        $dosen = $this->chatAdminKaprodiModel->findAll();
        $data = [
            'dosen' => $dosen
        ];
        return view('chatKaprodiAdmin', $data);
    }

    public function index5()
    {
        // $namaDosen = session()->get('nama_dosen_2');
        // $namaMhs = session()->get('nama_kaprodi');
        // $where =  "nama_dosen2='$namaDosen' AND nama_mhs='$namaMhs'";
        $dosen = $this->chatAdminKaprodiModel->findAll();
        $data = [
            'dosen' => $dosen
        ];
        return view('chatAdminKaprodi', $data);
    }

    public function tambahChatDariMhs()
    {
        $this->mahasiswaModel->save([
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nama_dosen' => $this->request->getVar('nama_dosen'),
            'file_chat' => '',
            'chat_dari_dosen' => '',
            'chat_dari_mahasiswa_ke_dosen1' => $this->request->getVar('chat_dari_mahasiswa')
        ]);
        return redirect()->to(base_url() . 'chatDosen');
    }

    public function lampirkanFileMhs()
    {
        $fileChat = $this->request->getFile('file_chat');
        $extensiFile = $fileChat->getExtension();
        // dd($fileChat->getExtension());
        $fileChat->move('uploadedFile');
        $namaFile = $fileChat->getName();
        $this->mahasiswaModel->save([
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nama_dosen' => $this->request->getVar('nama_dosen'),
            'file_chat' => $namaFile,
            'chat_dari_dosen' => '',
            'chat_dari_mahasiswa' => '',
            'extensiFile' => $extensiFile
        ]);

        return redirect()->to(base_url() . 'chatDosen');
    }

    public function update($id)
    {

        // ambil artikel yang akan diedit
        $dosen = new DosenModel();
        $data['dosen'] = $dosen->where('id', $id)->first();

        if ($data['dosen']['file_chat'] != null) {
            unlink('uploadedFile/' .  $data['dosen']['file_chat']);
        }
        $dosen->update($id, [
            'nama_mhs' => $data['dosen']['nama_mhs'],
            'nama_dosen' => $data['dosen']['nama_dosen'],
            'file_chat' => "",
            'chat_dari_dosen' => "",
            'chat_dari_mahasiswa' => "",
            'tanggal_dikirim' => "",
            'status_hapus' => "Anda menghapus pesan ini",
            'status_baca_mahasiswa' => "",
            'status_baca_dosen' => "",

        ]);
        // return 'ok';
        return redirect()->to(base_url() . 'chatDosen');
    }

    public function deletePermanen($id)
    {

        $this->mahasiswaModel->delete($id);
        return redirect()->to(base_url() . 'chatDosen');
    }
}
