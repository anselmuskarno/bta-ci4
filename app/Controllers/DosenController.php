<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\MahasiswaModel;
use App\Models\ChatAdminKaprodiModel;

class DosenController extends BaseController
{
    public $dosenModel;
    public $mahasiswaModel;
    public $chatAdminKaprodiModel;
    public function __construct()
    {
        $this->dosenModel = new DosenModel();
        $this->mahasiswaModel = new MahasiswaModel();
        $this->chatAdminKaprodiModel = new chatAdminKaprodiModel();
    }

    public function index()
    {

        $namaDosen = session()->get('nama_dosen_1');
        $namaMhs = session()->get('nama_mahasiswa');
        $where =  "nama_dosen1='$namaDosen' AND nama_mhs='$namaMhs'";
        $dosen = $this->dosenModel->where($where)->findAll();
        $data = [
            'dosen' => $dosen
        ];
        return view('chatDosen', $data);
    }

    public function index3()
    {
        $mahasiswa = new MahasiswaModel();
        $data['mahasiswa'] = $mahasiswa->where('id', session()->get('id_chat'))->first();
        if ($data['mahasiswa']['nama_dosen_1'] == session()->get('nama_dosen')) {
            $dosenOnline = "dosen1";
        } elseif ($data['mahasiswa']['nama_dosen_2'] == session()->get('nama_dosen')) {
            $dosenOnline = "dosen2";
        }
        $namaDosen = session()->get('nama_dosen');
        $namaMhs = $data['mahasiswa']['nama_mahasiswa'];
        // return ($namaMhs);
        $where =  "nama_dosen1='$namaDosen' AND nama_mhs='$namaMhs' OR  nama_dosen2='$namaDosen' AND nama_mhs='$namaMhs'";
        $dosen = $this->dosenModel->where($where)->findAll();

        $data = [
            'dosen' => $dosen,
            'dosen_online' => $dosenOnline,
            'nama_mahasiswa' => $data['mahasiswa']['nama_mahasiswa'],
            'judul_ta' => $data['mahasiswa']['judul_ta']
        ];
        return view('chatMahasiswa', $data);
    }

    public function index2()
    {

        $namaDosen = session()->get('nama_dosen_2');
        $namaMhs = session()->get('nama_mahasiswa');
        $where =  "nama_dosen2='$namaDosen' AND nama_mhs='$namaMhs'";
        $dosen = $this->dosenModel->where($where)->findAll();
        $data = [
            'dosen' => $dosen
        ];
        return view('chatDosen2', $data);
    }

    public function chatDosenMhs()
    {

        $namaDosen = session()->get('nama_dosen_2');
        $namaMhs = session()->get('nama_mahasiswa');
        $where =  "nama_dosen2='$namaDosen' AND nama_mhs='$namaMhs'";
        $dosen = $this->dosenModel->where($where)->findAll();
        $data = [
            'dosen' => $dosen
        ];
        return view('chatMahasiswa', $data);
    }

    public function tambahChatDariMhs()
    {
        // return $this->request->getVar('nama_dosen1');
        $this->dosenModel->save([
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nama_dosen1' => $this->request->getVar('nama_dosen1'),
            'file_chat_ke_dosen1' => '',
            'chat_dari_dosen1' => '',
            'chat_ke_dosen_1' => $this->request->getVar('chat_ke_dosen_1')
        ]);
        return redirect()->to(base_url() . 'chatDosen');
    }

    public function tambahChatDariKaprodi()
    {
        // return $this->request->getVar('nama_dosen1');
        $this->chatAdminKaprodiModel->save([
            'nama_kaprodi' => $this->request->getVar('nama_kaprodi'),
            'nama_admin' => $this->request->getVar('nama_admin'),
            'isi_chat_kaprodi' => $this->request->getVar('isi_chat_kaprodi')
        ]);
        return redirect()->to(base_url() . 'chatKaprodiAdmin');
    }

    public function tambahChatDariAdmin()
    {
        // return $this->request->getVar('nama_dosen1');
        $this->chatAdminKaprodiModel->save([
            'nama_kaprodi' => $this->request->getVar('nama_kaprodi'),
            'nama_admin' => $this->request->getVar('nama_admin'),
            'isi_chat_admin' => $this->request->getVar('isi_chat_admin')
        ]);
        return redirect()->to(base_url() . 'chatAdminKaprodi');
    }

    public function tambahChatDariDosen1()
    {
        $this->dosenModel->save([
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nama_dosen1' => $this->request->getVar('nama_dosen1'),
            'chat_dari_dosen1' => $this->request->getVar('chat_dari_dosen1')
        ]);
        return redirect()->to(base_url() . '/chatDosenMhs' . '/' . session()->get('id_chat'));
    }

    public function tambahChatDariDosen2()
    {
        // return "test";
        // return $this->request->getVar('nama_dosen1');
        // echo $this->request->getVar('nama_mhs');
        // echo $this->request->getVar('nama_dosen2');
        // return $this->request->getVar('chat_dari_dosen2');
        $this->dosenModel->save([
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nama_dosen2' => $this->request->getVar('nama_dosen2'),
            'chat_dari_dosen2' => $this->request->getVar('chat_dari_dosen2')
        ]);
        return redirect()->to(base_url() . '/chatDosenMhs' . '/' . session()->get('id_chat'));
    }

    public function tambahChatDariMhs2()
    {
        // return 'okmbaik';
        $this->dosenModel->save([
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nama_dosen2' => $this->request->getVar('nama_dosen2'),
            'file_chat' => '',
            'chat_dari_dosen2' => '',
            'chat_ke_dosen_2' => $this->request->getVar('chat_ke_dosen_2')
        ]);
        return redirect()->to(base_url() . 'mahasiswaDashboard2');
    }

    public function lampirkanFileMhs()
    {
        $fileChat = $this->request->getFile('file_chat_ke_dosen1');
        $extensiFile = $fileChat->getExtension();
        // dd($fileChat->getExtension());
        $fileChat->move('uploadedFile');
        $namaFile = $fileChat->getName();
        $this->dosenModel->save([
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nama_dosen1' => $this->request->getVar('nama_dosen1'),
            'file_chat_ke_dosen1' => $namaFile,
            'chat_dari_dosen1' => '',
            'chat_ke_dosen_1' => '',
            'extensiFile_ke_dosen1' => $extensiFile
        ]);

        return redirect()->to(base_url() . 'chatDosen');
    }

    public function lampirkanFileKaprodi()
    {
        $fileChat = $this->request->getFile('file_chat_kaprodi');
        $extensiFile = $fileChat->getExtension();
        // dd($fileChat->getExtension());
        $fileChat->move('uploadedFile');
        $namaFile = $fileChat->getName();
        $this->chatAdminKaprodiModel->save([
            'nama_admin' => $this->request->getVar('nama_admin'),
            'nama_kaprodi' => $this->request->getVar('nama_kaprodi'),
            'file_chat_kaprodi' => $namaFile,
            'extensiFile_chat_kaprodi' => $extensiFile
        ]);

        return redirect()->to(base_url() . 'chatKaprodiAdmin');
    }

    public function lampirkanFileAdmin()
    {
        $fileChat = $this->request->getFile('file_chat_admin');
        $extensiFile = $fileChat->getExtension();
        // dd($fileChat->getExtension());
        $fileChat->move('uploadedFile');
        $namaFile = $fileChat->getName();
        $this->chatAdminKaprodiModel->save([
            'nama_admin' => $this->request->getVar('nama_mhs'),
            'nama_admin' => $this->request->getVar('nama_admin'),
            'file_chat_admin' => $namaFile,
            'extensiFile_chat_admin' => $extensiFile
        ]);

        return redirect()->to(base_url() . 'chatAdminKaprodi');
    }

    public function lampirkanFileDosen1()
    {
        // return 'okmbaikkkkkkkk';
        $fileChat = $this->request->getFile('file_chat_dosen1_ke_mhs');
        $extensiFile = $fileChat->getExtension();
        // dd($fileChat->getExtension());
        // return $extensiFile;
        $fileChat->move('uploadedFile');
        $namaFile = $fileChat->getName();
        $this->dosenModel->save([
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nama_dosen1' => $this->request->getVar('nama_dosen1'),
            'file_chat_dosen1_ke_mhs' => $namaFile,
            'chat_dari_dosen1' => '',
            'chat_ke_dosen_1' => '',
            'extensiFileDosen1_ke_mhs' => $extensiFile
        ]);

        return redirect()->to(base_url() . '/chatDosenMhs' . '/' . session()->get('id_chat'));
    }

    public function lampirkanFileDosen2()
    {
        // return 'okmbaikkkkkkkk';
        $fileChat = $this->request->getFile('file_chat_dosen2_ke_mhs');
        $extensiFile = $fileChat->getExtension();
        // dd($fileChat->getExtension());
        // return $extensiFile;
        $fileChat->move('uploadedFile');
        $namaFile = $fileChat->getName();
        $this->dosenModel->save([
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nama_dosen2' => $this->request->getVar('nama_dosen2'),
            'file_chat_dosen2_ke_mhs' => $namaFile,
            'chat_dari_dosen2' => '',
            'chat_ke_dosen_2' => '',
            'extensiFileDosen2_ke_mhs' => $extensiFile
        ]);

        return redirect()->to(base_url() . '/chatDosenMhs' . '/' . session()->get('id_chat'));
    }

    public function proposal()
    {
        $namaDosen = session()->get('nama_dosen');
        // $namaMhs = session()->get('nama_mahasiswa');
        $where =  "nama_dosen_1='$namaDosen'AND nama_ujian= 'proposal' OR nama_dosen_2='$namaDosen' AND nama_ujian= 'proposal'";
        $dosen = $this->mahasiswaModel->where($where)->findAll();
        // return 'ok';
        // dd($dosen);
        $data = [
            'mahasiswa' => $dosen
        ];
        return view('dosenProposal', $data);
    }

    public function hasil()
    {
        $namaDosen = session()->get('nama_dosen');
        // $namaMhs = session()->get('nama_mahasiswa');
        $where =  "nama_dosen_1='$namaDosen'AND nama_ujian= 'semhas' OR nama_dosen_2='$namaDosen' AND nama_ujian= 'semhas'";
        $dosen = $this->mahasiswaModel->where($where)->findAll();
        // return 'ok';
        // dd($dosen);
        $data = [
            'mahasiswa' => $dosen
        ];
        return view('dosenHasil', $data);
    }

    public function tutup()
    {
        $namaDosen = session()->get('nama_dosen');
        // $namaMhs = session()->get('nama_mahasiswa');
        $where =  "nama_dosen_1='$namaDosen'AND nama_ujian= 'tutup' OR nama_dosen_2='$namaDosen' AND nama_ujian= 'tutup'";
        // array('nama_dosen_1' => $namaDosen, 'name' => $name, 'status' => 1);
        $dosen = $this->mahasiswaModel->where($where)->findAll();
        // return 'ok';
        // dd($dosen);
        $data = [
            'mahasiswa' => $dosen
        ];
        return view('dosenTutup', $data);
    }

    public function ubahStatusAccProposal($id)
    {

        $mahasiswa = new MahasiswaModel();
        $data['dosen'] = $mahasiswa->where('id', $id)->first();
        if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_1'] && $data['dosen']['acc_dosen1'] == "1") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => "0",
                'acc_dosen2' => $data['dosen']['acc_dosen1'],
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);



            // return "disini";
        } else if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_2'] && $data['dosen']['acc_dosen2'] == "1") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => "0",
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        } else  if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_1'] && $data['dosen']['acc_dosen1'] == "0") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => "1",
                'acc_dosen2' => $data['dosen']['acc_dosen2'],
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        } else  if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_2'] && $data['dosen']['acc_dosen2'] == "0") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => "1",
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        }

        return redirect()->to(base_url() . 'dosenProposal');
    }

    public function ubahStatusAccKaprodiProposal($id)
    {
        // return $id;
        $mahasiswa = new MahasiswaModel();
        $data['dosen'] = $mahasiswa->where('id', $id)->first();

        if ($data['dosen']['acc_kaprodi'] == "0") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => $data['dosen']['acc_dosen2'],
                'acc_kaprodi' => "1",
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        } else if ($data['dosen']['acc_kaprodi'] == "1") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => $data['dosen']['acc_dosen2'],
                'acc_kaprodi' => "0",
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        }
        return redirect()->to(base_url() . 'kaprodiProposal');
    }

    public function ubahStatusAccKaprodiHasil($id)
    {
        // return $id;
        $mahasiswa = new MahasiswaModel();
        $data['dosen'] = $mahasiswa->where('id', $id)->first();

        if ($data['dosen']['acc_kaprodi'] == "0") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => $data['dosen']['acc_dosen2'],
                'acc_kaprodi' => "1",
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        } else if ($data['dosen']['acc_kaprodi'] == "1") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => $data['dosen']['acc_dosen2'],
                'acc_kaprodi' => "0",
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        }
        return redirect()->to(base_url() . 'kaprodiHasil');
    }

    public function ubahStatusAccKaprodiTutup($id)
    {
        // return $id;
        $mahasiswa = new MahasiswaModel();
        $data['dosen'] = $mahasiswa->where('id', $id)->first();

        if ($data['dosen']['acc_kaprodi'] == "0") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => $data['dosen']['acc_dosen2'],
                'acc_kaprodi' => "1",
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        } else if ($data['dosen']['acc_kaprodi'] == "1") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => $data['dosen']['acc_dosen2'],
                'acc_kaprodi' => "0",
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        }
        return redirect()->to(base_url() . 'kaprodiTutup');
    }

    public function ubahStatusAccHasil($id)
    {

        $mahasiswa = new MahasiswaModel();
        $data['dosen'] = $mahasiswa->where('id', $id)->first();
        if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_1'] && $data['dosen']['acc_dosen1'] == "1") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => "0",
                'acc_dosen2' => $data['dosen']['acc_dosen1'],
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);



            // return "disini";
        } else if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_2'] && $data['dosen']['acc_dosen2'] == "1") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => "0",
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        } else  if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_1'] && $data['dosen']['acc_dosen1'] == "0") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => "1",
                'acc_dosen2' => $data['dosen']['acc_dosen2'],
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        } else  if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_2'] && $data['dosen']['acc_dosen2'] == "0") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => "1",
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        }

        // $mahasiswa->update($id, [
        //     'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
        //     'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
        //     'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
        //     'nim' => $data['dosen']['nim'],
        //     'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
        //     'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
        //     'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
        //     'acc_dosen1' => $data['dosen']['acc_dosen1'],
        //     'acc_dosen2' => $data['dosen']['acc_dosen2'],
        //     'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
        //     'file_skripsi' => $data['dosen']['file_skripsi'],
        //     'nama_ujian' => $data['dosen']['nama_ujian']
        // ]);
        return redirect()->to(base_url() . 'dosenHasil');
    }

    public function ubahStatusAccTutup($id)
    {

        $mahasiswa = new MahasiswaModel();
        $data['dosen'] = $mahasiswa->where('id', $id)->first();
        if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_1'] && $data['dosen']['acc_dosen1'] == "1") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => "0",
                'acc_dosen2' => $data['dosen']['acc_dosen1'],
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);



            // return "disini";
        } else if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_2'] && $data['dosen']['acc_dosen2'] == "1") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => "0",
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        } else  if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_1'] && $data['dosen']['acc_dosen1'] == "0") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => "1",
                'acc_dosen2' => $data['dosen']['acc_dosen2'],
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        } else  if (session()->get('nama_dosen') == $data['dosen']['nama_dosen_2'] && $data['dosen']['acc_dosen2'] == "0") {
            $mahasiswa->update($id, [
                'username_mahasiswa' => $data['dosen']['username_mahasiswa'],
                'password_mahasiswa' => $data['dosen']['password_mahasiswa'],
                'nama_mahasiswa' => $data['dosen']['nama_mahasiswa'],
                'nim' => $data['dosen']['nim'],
                'nama_dosen_1' => $data['dosen']['nama_dosen_1'],
                'nama_dosen_2' => $data['dosen']['nama_dosen_2'],
                'nama_kaprodi' => $data['dosen']['nama_kaprodi'],
                'acc_dosen1' => $data['dosen']['acc_dosen1'],
                'acc_dosen2' => "1",
                'acc_kaprodi' => $data['dosen']['acc_kaprodi'],
                'file_skripsi' => $data['dosen']['file_skripsi'],
                'nama_ujian' => $data['dosen']['nama_ujian']
            ]);
        }

        return redirect()->to(base_url() . 'dosenTutup');
    }

    public function lampirkanFileMhs2()
    {
        // return 'ok';
        $fileChat = $this->request->getFile('file_chat_ke_dosen2');
        $extensiFile = $fileChat->getExtension();
        // dd($fileChat->getExtension());
        $fileChat->move('uploadedFile');
        $namaFile = $fileChat->getName();
        $this->dosenModel->save([
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'nama_dosen2' => $this->request->getVar('nama_dosen2'),
            'file_chat_ke_dosen2' => $namaFile,
            'chat_dari_dosen2' => '',
            'chat_ke_dosen_2' => '',
            'extensiFile_ke_dosen2' => $extensiFile
        ]);

        return redirect()->to(base_url() . 'mahasiswaDashboard2');
    }

    public function update($id)
    {
        // return "ok";
        // ambil artikel yang akan diedit
        $dosen = new DosenModel();
        $data['dosen'] = $dosen->where('id', $id)->first();

        // return $data['dosen']['file_chat_ke_dosen2'];

        if ($data['dosen']['file_chat_ke_dosen1'] != null) {
            unlink('uploadedFile/' .  $data['dosen']['file_chat_ke_dosen1']);
        }
        $dosen->update($id, [
            'nama_mhs' => $data['dosen']['nama_mhs'],
            'nama_dosen1' => $data['dosen']['nama_dosen1'],
            'file_chat_ke_dosen1' => "",
            'chat_dari_dosen1' => "",
            'chat_ke_dosen_2' => "",
            'tanggal_dikirim' => "",
            'status_hapus_chat_ke_dosen1' => "Anda menghapus pesan ini",
            'status_baca_mahasiswa_dari_dosen1' => "",
            'status_baca_dosen1' => "",

        ]);
        // return 'ok';
        return redirect()->to(base_url() . 'chatDosen');
    }
    public function update2($id)
    {

        // ambil artikel yang akan diedit
        $dosen = new DosenModel();
        $data['dosen'] = $dosen->where('id', $id)->first();

        // return $data['dosen']['file_chat_ke_dosen2'];

        if ($data['dosen']['file_chat_ke_dosen2'] != null) {
            unlink('uploadedFile/' .  $data['dosen']['file_chat_ke_dosen2']);
        }
        $dosen->update($id, [
            'nama_mhs' => $data['dosen']['nama_mhs'],
            'nama_dosen2' => $data['dosen']['nama_dosen2'],
            'file_chat_ke_dosen2' => "",
            'chat_dari_dosen2' => "",
            'chat_ke_dosen_2' => "",
            'tanggal_dikirim' => "",
            'status_hapus_chat_ke_dosen2' => "Anda menghapus pesan ini",
            'status_baca_mahasiswa_dari_dosen2' => "",
            'status_baca_dosen2' => "",

        ]);
        // return 'ok';
        return redirect()->to(base_url() . 'mahasiswaDashboard2');
    }
    public function update3($id)
    {
        // return 'ok';
        // ambil artikel yang akan diedit
        $dosen = new DosenModel();
        $data['dosen'] = $dosen->where('id', $id)->first();

        // return $data['dosen']['file_chat_ke_dosen2'];

        if ($data['dosen']['file_chat_ke_dosen1'] != null) {
            unlink('uploadedFile/' .  $data['dosen']['file_chat_ke_dosen1']);
        }
        $dosen->update($id, [
            'nama_mhs' => $data['dosen']['nama_mhs'],
            'nama_dosen1' => $data['dosen']['nama_dosen1'],
            'file_chat_ke_dosen1' => "",
            'chat_dari_dosen1' => "",
            'chat_ke_dosen_1' => "",
            'tanggal_dikirim' => "",
            'status_hapus_chat_dari_dosen1' => "Anda menghapus pesan ini",
            'status_baca_mahasiswa_dari_dosen1' => "",
            'status_baca_dosen2' => "",

        ]);
        // return 'ok';
        return redirect()->to(base_url() . '/chatDosenMhs' . '/' . session()->get('id_chat'));
    }

    public function update4($id)
    {
        // return 'okmbaikkkkk';
        // ambil artikel yang akan diedit
        $dosen = new DosenModel();
        $data['dosen'] = $dosen->where('id', $id)->first();

        // return $data['dosen']['file_chat_ke_dosen2'];
        if ($data['dosen']['file_chat_ke_dosen2'] != null) {
            unlink('uploadedFile/' .  $data['dosen']['file_chat_ke_dosen2']);
        }
        // return $data['dosen']['nama_dosen2'];
        $dosen->update($id, [
            'nama_mhs' => $data['dosen']['nama_mhs'],
            'nama_dosen2' => $data['dosen']['nama_dosen2'],
            'file_chat_ke_dosen2' => "",
            'chat_dari_dosen2' => "",
            'chat_ke_dosen_2' => "",
            'tanggal_dikirim' => "",
            'status_hapus_chat_dari_dosen2' => "Anda menghapus pesan ini",
            'status_baca_mahasiswa_dari_dosen2' => "",
            'status_baca_dosen2' => "",

        ]);
        // return 'ok';
        return redirect()->to(base_url() . '/chatDosenMhs' . '/' . session()->get('id_chat'));
    }

    public function update5($id)
    {
        // return 'okmbaikkkkk';
        // return $id;
        // ambil artikel yang akan diedit
        $kaprodi = new ChatAdminKaprodiModel();
        $data['kaprodi'] = $kaprodi->where('id', $id)->first();

        // return $data['kaprodi']['file_chat_ke_kaprodi2'];
        if ($data['kaprodi']['file_chat_kaprodi'] != null) {
            unlink('uploadedFile/' .  $data['kaprodi']['file_chat_kaprodi']);
        }
        // return $data['kaprodi']['nama_kaprodi2'];
        $kaprodi->update($id, [
            'nama_admin' => $data['kaprodi']['nama_admin'],
            'nama_kaprodi' => $data['kaprodi']['nama_kaprodi'],
            'file_chat_kaprodi' => "",
            'isi_chat_kaprodi' => "",
            'status_hapus_chat_kaprodi' => "Anda menghapus pesan ini",

        ]);
        // return 'ok';
        return redirect()->to(base_url() . 'chatKaprodiAdmin');
    }

    public function update6($id)
    {
        // return 'okmbaikkkkk';
        // return $id;
        // ambil artikel yang akan diedit
        $admin = new ChatAdminKaprodiModel();
        $data['admin'] = $admin->where('id', $id)->first();

        // return $data['admin']['file_chat_ke_kaprodi2'];
        if ($data['admin']['file_chat_admin'] != null) {
            unlink('uploadedFile/' .  $data['admin']['file_chat_admin']);
        }
        // return $data['admin']['nama_kaprodi2'];
        $admin->update($id, [
            'nama_admin' => $data['admin']['nama_admin'],
            'nama_kaprodi' => $data['admin']['nama_kaprodi'],
            'file_chat_admin' => "",
            'isi_chat_admin' => "",
            'status_hapus_chat_admin' => "Anda menghapus pesan ini",

        ]);
        // return 'ok';
        return redirect()->to(base_url() . 'chatAdminKaprodi');
    }

    public function deletePermanen($id)
    {

        $this->dosenModel->delete($id);
        return redirect()->to(base_url() . 'chatDosen');
    }

    public function deletePermanenChatKaprodi($id)
    {

        $this->chatAdminKaprodiModel->delete($id);
        return redirect()->to(base_url() . 'chatKaprodiAdmin');
    }

    public function deletePermanenChatAdmin($id)
    {

        $this->chatAdminKaprodiModel->delete($id);
        return redirect()->to(base_url() . 'chatAdminKaprodi');
    }

    public function deletePermanen2($id)
    {

        $this->dosenModel->delete($id);
        return redirect()->to(base_url() . 'mahasiswaDashboard2');
    }
    public function deletePermanenDosen1($id)
    {

        $this->dosenModel->delete($id);
        return redirect()->to(base_url() . '/chatDosenMhs' . '/' . session()->get('id_chat'));
    }
}
