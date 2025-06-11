<?php

namespace App\Controllers;

use App\Models\DataSiswaModel;
use App\Controllers\BaseController;
use App\Models\DokumenSiswaModel;

use function PHPUnit\Framework\stringContains;

class DokumenSiswa extends BaseController
{
    private $DokumenSiswaModel;
    private $DataSiswaModel;

    public function __construct()
    {
        $this->DokumenSiswaModel = new DokumenSiswaModel();
        $this->DataSiswaModel = new DataSiswaModel();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Tabel Dokumen Siswa',
            'dokumen' => $this->DataSiswaModel->siswa(),
            'isi' => 'admin/v_dokumensiswa/v_masterdokumen'
        );
        // print_r($data["dokumensiswa"]);
        return view('layout/v_wrapper', $data);
    }

    public function lihat($nid)
    {               
        $data = array(
            'title' => 'Tabel Dokumen Siswa',
            'dokumensiswa' => $this->DokumenSiswaModel->findById($nid),
            'isi' => 'admin/v_dokumensiswa/v_tabeldokumensiswa'
        );
        // print_r($data["dokumensiswa"]);
        return view('layout/v_wrapper', $data);
    }

    public function hapus()
    {
        $model = new DokumenSiswaModel();
        $id = $this->request->getPost('id');
        echo $id;
        $dokumen = $model->find($id);

        if ($dokumen) {
            $imagePath = 'uploads/' . $dokumen['nama_dokumen'];

            if (file_exists($imagePath)) {
                unlink($imagePath);
                $model->delete($id);
                session()->setFlashdata('sukses', 'Dokumen siswa berhasil dihapus.');
            } else {
                $model->delete($id);
                session()->setFlashdata('pesan', 'Data dihapus, Berkas gambar tidak ditemukan.');
            }
        } else {
            session()->setFlashdata('gagal', 'Dokumen siswa tidak ditemukan.');
        }

        return redirect()->to(previous_url());
    }

    public function formtambah()
    {
        $datamodel = new DataSiswaModel();
        $data = array(
            'title' => 'Tambah Dokumen Siswa',
            'datanid' => $datamodel->all_data(),
            'isi' => 'admin/v_dokumensiswa/v_tambahdokumensiswa'
        );
        // print_r($data["dokumensiswa"]);
        return view('layout/v_wrapper', $data);
    }

    public function store()
    {
        $validationRules = [
            'foto' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]',
        ];

        if (!$this->validate($validationRules)) {
            session()->setFlashdata('lainya', 'File yang diupload salah atau melebihi maksimal yaitu 1024kb.');
            return redirect()->back();
        }

        $nid = $this->request->getPost('nid');
        $jenis = $this->request->getPost('jenis');

        // Cek apakah kombinasi nid dan jenis sudah ada di database
        $model = new DokumenSiswaModel();
        $existingFile = $model->where('nid', $nid)->where('jenis', $jenis)->first();

        if ($existingFile) {
            // Jika sudah ada, tampilkan pesan flash data dan kembali ke halaman sebelumnya
            session()->setFlashdata('lainya', 'File dengan NID dan Jenis tersebut sudah diupload sebelumnya.');
            return redirect()->back();
        }

        $foto = $this->request->getFile('foto');

        if ($foto->isValid() && !$foto->hasMoved()) {
            $ext = $foto->getClientExtension();
            $newNamefoto = $nid . '_' . $jenis . '.' . $ext;
            $foto->move('./uploads', $newNamefoto, true);

            $model->insert([
                'nid' => $nid,
                'jenis' => $jenis,
                'nama_dokumen' => $foto->getName(),
                'file_dokumen' => 'uploads/' . $newNamefoto
            ]);
        }

        session()->setFlashdata('sukses', 'File berhasil diupload.');
        return redirect()->back();

        if (session()->get('role') == "1") {
            return redirect()->to(base_url('dokumensiswa/index'));
        } else {
            return redirect()->to(previous_url());
        }
    }

    public function edit()
    {
        $model = new DokumenSiswaModel();

        $id = $this->request->getPost('id');

        $data = $model->find($id);

        $array_ret = array(
            'title' => 'Edit Data Siswa',
            'data' => $data,
            'isi' => 'admin/v_dokumensiswa/v_editdokumensiswa'
        );

        return view('layout/v_wrapper', $array_ret);
        // return view('admin/editDataSiswa', $data);
    }

    public function update()
    {
        $model = new DokumenSiswaModel();
        $id = $this->request->getPost('id');
        $nid = $this->request->getPost('nid');
        $jenis = $this->request->getPost('jenis');
        $nama_dokumen = $this->request->getPost('nama_dokumen');
        // $status = $this->request->getPost('status');
        $foto = $this->request->getFile('foto');

        $validationRules = [
            'foto' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]',
        ];

        if (!$this->validate($validationRules)) {
            session()->setFlashdata('lainya', 'File yang diupload salah atau melebihi maksimal yaitu 1024kb.');
            return redirect()->back();
        }

        if ($foto->isValid() && !$foto->hasMoved()) {
            $imagePath = FCPATH . 'uploads/' . $nama_dokumen;

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $ext = $foto->getClientExtension();
            $newNamefoto = $nid . '_' . $jenis . '.' . $ext;
            $foto->move('./uploads', $newNamefoto, true);

            $data = [
                'id' => $id,
                'nid' => $nid,
                'jenis' => $jenis,
                'nama_dokumen' => $foto->getName(),
                'file_dokumen' => 'uploads/' . $newNamefoto,
            ];

            $model->update($id, $data);

            session()->setFlashdata('sukses', 'File berhasil diubah');
            if (session()->get('role') == "1") {
                return redirect()->to(base_url('dokumensiswa/index'));
            } else {   
                return redirect()->to(base_url('user/dokumen/lihat'));
            }
        }
    }

public function valid()
{
$model = new DokumenSiswaModel();

$id = $this->request->getPost('id');
$status = $this->request->getPost('status');
$up = "";

if ($status == "valid"){
$up = "invalid";
session()->setFlashdata('gagal', 'Membatalkan validasi');
} elseif ($status == "invalid"){
session()->setFlashdata('sukses', 'File berhasil divalidasi');
$up = "valid";            
}

$data = [
'id' => $id,
'status' => $up,
];

$model->update($id, $data);

return redirect()->to(base_url('dokumensiswa/index'));
}
}
