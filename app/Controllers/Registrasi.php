<?php

namespace App\Controllers;

use App\Models\DataSiswaModel;
use App\Models\DokumenSiswaModel;
use App\Models\Auth_Model;
use App\Controllers\BaseController;

use function PHPUnit\Framework\stringContains;

class Registrasi extends BaseController
{
    public function formcreate()
    {
        $model = new DataSiswaModel();
        $nextNID = $model->nextID();
        $data = [
            'nextNID' => $nextNID,
        ];
        return view('registrasi/v_form', $data);
    }

    public function formstore()
    {
        $model = new DataSiswaModel();

        $validationRules = [
            'nid' => 'required|numeric',
            'nik' => 'required|numeric',
            'nama' => 'required',
            'gender' => 'required|in_list[L,P]',
            'pekerjaan' => 'required',
            'telp' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tg_lahir' => 'required|valid_date',
            'alamat_dsn' => 'required',
            'alamat_kec' => 'required',
            'alamat_kab' => 'required',
            'jurusan' => 'required',
            'pend_terakhir' => 'required',
            'lulus_tahun' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'gol_darah' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            session()->setFlashdata('gagal', 'terjadi kesalahan input, coba lagi');
            return redirect()->to(base_url('daftar/formdaftar'));
        }

        // Ambil data dari form
        $data = [
            'nid' => $this->request->getPost('nid'),
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'gender' => $this->request->getPost('gender'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'telp' => $this->request->getPost('telp'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tg_lahir' => $this->request->getPost('tg_lahir'),
            'alamat_dsn' => $this->request->getPost('alamat_dsn'),
            'alamat_kec' => $this->request->getPost('alamat_kec'),
            'alamat_kab' => $this->request->getPost('alamat_kab'),
            'jurusan' => $this->request->getPost('jurusan'),
            'pend_terakhir' => $this->request->getPost('pend_terakhir'),
            'lulus_tahun' => $this->request->getPost('lulus_tahun'),
            'nama_ayah' => $this->request->getPost('nama_ayah'),
            'nama_ibu' => $this->request->getPost('nama_ibu'),
            'tinggi_badan' => $this->request->getPost('tinggi_badan'),
            'berat_badan' => $this->request->getPost('berat_badan'),
            'gol_darah' => $this->request->getPost('gol_darah'),
            'tgl_daftar' => date('Y-m-d'),
            'thn_daftar' => date('Y'),
            'status' => "pendaftar",
        ];

        // Simpan data ke dalam database
        $model->insert($data);

        return redirect()->to(base_url('daftar/getusername?nid=' . $this->request->getPost('nid')));
    }

    // public function dokcreate()
    // {
    //     return view('registrasi/v_dokumen');
    // }

    // public function dokstore()
    // {
    //     // Memvalidasi inputan dari form
    //     $validationRules = [
    //         'foto' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]',
    //         'ktp' => 'uploaded[ktp]|max_size[ktp,1024]|is_image[ktp]',
    //         'kk' => 'uploaded[kk]|max_size[kk,1024]|is_image[kk]',
    //         'ijazah' => 'uploaded[ijazah]|max_size[ijazah,1024]|is_image[ijazah]',
    //     ];

    //     if (!$this->validate($validationRules)) {
    //         // Jika validasi gagal, kembalikan dengan pesan error
    //         return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    //     }

    //     // Jika validasi sukses, lanjutkan proses upload
    //     $nid = $this->request->getPost('nid');

    //     $foto = $this->request->getFile('foto');
    //     $ktp = $this->request->getFile('ktp');
    //     $kk = $this->request->getFile('kk');
    //     $ijazah = $this->request->getFile('ijazah');

    //     // Proses upload foto
    //     if ($foto->isValid() && !$foto->hasMoved()) {
    //         // $newNamefoto = $foto->getRandomName();
    //         $ext = $foto->getClientExtension();
    //         $newNamefoto = $nid . '_foto.' . $ext;
    //         $foto->move('./uploads', $newNamefoto,true);
    //         $jenis2 = "foto";

    //         $model = new DokumenSiswaModel();
    //         $model->insert([
    //             'nid' => $nid,
    //             'jenis' => $jenis2,
    //             'nama_dokumen' => $foto->getName(),
    //             'file_dokumen' => 'uploads/' . $newNamefoto
    //         ]);
    //     }

    //     // Proses upload ktp
    //     if ($ktp->isValid() && !$ktp->hasMoved()) {
    //         // $newNamektp = $ktp->getRandomName();
    //         $ext = $ktp->getClientExtension();
    //         $newNamektp = $nid . '_ktp.' . $ext;
    //         $ktp->move('./uploads', $newNamektp,true);
    //         $jenis1 = "ktp";

    //         $model = new DokumenSiswaModel();
    //         $model->insert([
    //             'nid' => $nid,
    //             'jenis' => $jenis1,
    //             'nama_dokumen' => $ktp->getName(),
    //             'file_dokumen' => 'uploads/' . $newNamektp
    //         ]);
    //     }

    //     // Proses upload kk
    //     if ($kk->isValid() && !$kk->hasMoved()) {
    //         // $newNamekk = $kk->getRandomName();
    //         $ext = $kk->getClientExtension();
    //         $newNamekk = $nid . '_kk.' . $ext;
    //         $kk->move('./uploads', $newNamekk,true);
    //         $jenis2 = "kk";

    //         $model = new DokumenSiswaModel();
    //         $model->insert([
    //             'nid' => $nid,
    //             'jenis' => $jenis2,
    //             'nama_dokumen' => $kk->getName(),
    //             'file_dokumen' => 'uploads/' . $newNamekk
    //         ]);
    //     }

    //     // Proses upload ijazah
    //     if ($ijazah->isValid() && !$ijazah->hasMoved()) {
    //         // $newNameijazah = $ijazah->getRandomName();
    //         $ext = $ijazah->getClientExtension();
    //         $newNameijazah = $nid . '_ijazah.' . $ext;
    //         $ijazah->move('./uploads', $newNameijazah,true);
    //         $jenis2 = "ijazah";

    //         $model = new DokumenSiswaModel();
    //         $model->insert([
    //             'nid' => $nid,
    //             'jenis' => $jenis2,
    //             'nama_dokumen' => $ijazah->getName(),
    //             'file_dokumen' => 'uploads/' . $newNameijazah
    //         ]);
    //     }
    //     // return redirect()->to(site_url('getusername'));
    //     return redirect()->to(base_url('daftar/getusername?nid=' . $nid));

    // }

    // public function getusername()
    // {
    //     $nid = $this->request->getPost('nid');

    //     $DataSiswaModel = new DataSiswaModel();
    //     $getdata = $DataSiswaModel->select('nama')->where('nid', $nid)->get();
    //     $row = $getdata->getRow();
    //     $nama = $row['nama'];
    //     // $this->insertUser($nid);
    //     return view('registrasi/v_getusername');
    // }


    // Klaim Username
    // =============================================
    private $DataSiswaModel;
    public function __construct()
    {
        $this->DataSiswaModel = new DokumenSiswaModel();
    }

    public function getusername()
    {
        $model = new DataSiswaModel();
        $nid = $this->request->getGet('nid');

        $data['siswa'] = $model->find($nid);

        $this->storeusername($data['siswa']['nid'], $data['siswa']['nama']);

        return view('registrasi/v_getusername', $data);
    }

    public function storeusername($nid,$nama)
    {
        $model = new Auth_Model();
        $pass = $nid;
        $data = [
            'nama_user' => $nama,
            'username' => $nid,
            'password' => $pass,
            'role' => "3",
        ];
        $model->insert($data);
    }
}
