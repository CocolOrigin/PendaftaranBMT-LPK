<?php

namespace App\Controllers;

use App\Models\DataSiswaModel;
use App\Controllers\BaseController;
use App\Models\SertifikatModel;

use function PHPUnit\Framework\stringContains;

class Sertifikat extends BaseController
{
    private $SertifikatModel;
    private $DataSiswaModel;

    public function __construct()
    {
        $this->SertifikatModel = new SertifikatModel();   
        $this->DataSiswaModel = new DataSiswaModel();
        helper('form');
    }

    public function index()
    {
        $data = array(      
            'title' => 'Tabel Sertifikat',
            'dokumen' => $this->DataSiswaModel->siswa(),
            'isi' => 'admin/v_sertifikat/v_mastersertifikat'
        );
        // print_r($data["dokumensiswa"]);
        return view('layout/v_wrapper', $data);
    }

    public function lihat($nid)
    {
        $data = array(
            'title' => 'Tabel Sertifikat',
            'sertifikat' => $this->SertifikatModel->findById($nid),
            'isi' => 'admin/v_sertifikat/v_tabelsertifikat'
        );
        // print_r($data["dokumensiswa"]);
        return view('layout/v_wrapper', $data);
    }

    // public function index()
    // {
    //     $data = array(
    //         'title' => 'Tabel Sertifikat',
    //         'sertifikat' => $this->SertifikatModel->all_data(),
    //         'isi' => 'admin/v_sertifikat/v_tabelsertifikat'
    //     );
    //     return view('layout/v_wrapper', $data);
    // }

    public function hapus()
    {
        $model = new SertifikatModel();
        $id = $this->request->getPost('id');
        echo $id;
        $sertifikat = $model->find($id);

        if ($sertifikat) {
            $imagePath = 'uploads/' . $sertifikat['nama_sertifikat'];

            if (file_exists($imagePath)) {
                unlink($imagePath);
                $model->delete($id);
                session()->setFlashdata('sukses', 'Sertifikat berhasil dihapus.');
            } else {
                $model->delete($id);
                session()->setFlashdata('pesan', 'Data dihapus, Berkas gambar tidak ditemukan.');
            }
        } else {
            session()->setFlashdata('gagal', 'Sertifikat tidak ditemukan.');
        }

        return redirect()->to(previous_url());
    }

    public function formtambah()
    {
        $datamodel = new DataSiswaModel();
        $data = array(
            'title' => 'Tambah Sertifikat',
            'datanid' => $datamodel->all_data(),
            'isi' => 'admin/v_sertifikat/v_tambahsertifikat'
        );
        // print_r($data["sertifikat"]);
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
        $model = new SertifikatModel();
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
                'nama_sertifikat' => $foto->getName(),
                'file_sertifikat' => 'uploads/' . $newNamefoto
            ]);
        }

        session()->setFlashdata('sukses', 'File berhasil diupload.');

        if (session()->get('role') == "1") {
            return redirect()->to(base_url('sertifikat/index'));
        } else {
            return redirect()->to(previous_url());
        }
    }

    public function edit()
    {
        $model = new SertifikatModel();

        $id = $this->request->getPost('id');

        $data = $model->find($id);

        $array_ret = array(
            'title' => 'Edit Data Siswa',
            'data' => $data,
            'isi' => 'admin/v_sertifikat/v_editsertifikat'
        );

        return view('layout/v_wrapper', $array_ret);
        // return view('admin/editDataSiswa', $data);
    }

    public function update()
    {
        $model = new SertifikatModel();
        $id = $this->request->getPost('id');
        $nid = $this->request->getPost('nid');
        $jenis = $this->request->getPost('jenis');
        $nama_sertifikat = $this->request->getPost('nama_sertifikat');
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
            $imagePath = FCPATH . 'uploads/' . $nama_sertifikat;

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
                'nama_sertifikat' => $foto->getName(),
                'file_sertifikat' => 'uploads/' . $newNamefoto,
            ];

            $model->update($id, $data);

            session()->setFlashdata('sukses', 'File berhasil diubah');
            if (session()->get('role') == "1") {
                return redirect()->to(base_url('sertifikat/index'));
            } else {   
                return redirect()->to(base_url('user/sertifikat/lihat'));
            }
        }
    }

    public function valid()
    {
        $model = new SertifikatModel();

        $id = $this->request->getPost('id');
        $status = $this->request->getPost('status');
        $up = "";

        if ($status == "valid"){
            session()->setFlashdata('gagal', 'Membatalkan validasi');
            $up = "invalid";
        } elseif ($status == "invalid"){
            session()->setFlashdata('sukses', 'File berhasil divalidasi');
            $up = "valid";            
        }

        $data = [
            'id' => $id,
            'status' => $up,
        ];

        $model->update($id, $data);

        // return redirect()->to(base_url('sertifikat/index'));
    }
}
