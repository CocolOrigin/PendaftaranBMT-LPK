<?php

namespace App\Controllers;

use App\Models\DataSiswaModel;
use App\Models\DokumenSiswaModel;
use App\Models\SertifikatModel;
use App\Models\PembayaranModel;
use App\Controllers\BaseController;

use function PHPUnit\Framework\stringContains;

class UserController extends BaseController
{
    private $DokumenSiswaModel;
    // private $PembayaranModel;

    public function __construct()
    {
        $this->DokumenSiswaModel = new DokumenSiswaModel();
        helper('form');
    }

    public function data()
    {
        $model = new DataSiswaModel();
        $nid = session()->get('username');

        $data = $model->find($nid);
        $array_ret = array(
            'title' => 'Lihat Data User',
            'datasiswa' => $data,
            'isi' => 'user/v_data/v_lihatdata'
        );

        return view('layout/v_wrapper', $array_ret);
    }

    public function editdata()
    {
        $validationRules = [
            'nama' => 'required',
            'nik' => 'required|numeric',
            'gender' => 'required',
            'pekerjaan' => 'required',
            'telp' => 'required|numeric',
            'tinggi_badan' => 'required|min_length[3]',
            'berat_badan' => 'required|min_length[2]',
            'gol_darah' => 'required',
            'tempat_lahir' => 'required',
            'tg_lahir' => 'required',
            'alamat_dsn' => 'required',
            'alamat_kec' => 'required',
            'alamat_kab' => 'required',
            'pend_terakhir' => 'required',
            'jurusan' => 'required',
            'lulus_tahun' => 'required|min_length[4]',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'status' => 'required',
        ];

        if ($this->validate($validationRules)) {
            // Ambil data dari form
            $nid = $this->request->getPost('nid');
            $nama = $this->request->getPost('nama');
            $nik = $this->request->getPost('nik');
            $gender = $this->request->getPost('gender');
            $pekerjaan = $this->request->getPost('pekerjaan');
            $telp = $this->request->getPost('telp');
            $tinggi_badan = $this->request->getPost('tinggi_badan');
            $berat_badan = $this->request->getPost('berat_badan');
            $gol_darah = $this->request->getPost('gol_darah');
            $tempat_lahir = $this->request->getPost('tempat_lahir');
            $tg_lahir = $this->request->getPost('tg_lahir');
            $alamat_dsn = $this->request->getPost('alamat_dsn');
            $alamat_kec = $this->request->getPost('alamat_kec');
            $alamat_kab = $this->request->getPost('alamat_kab');
            $pend_terakhir = $this->request->getPost('pend_terakhir');
            $jurusan = $this->request->getPost('jurusan');
            $lulus_tahun = $this->request->getPost('lulus_tahun');
            $nama_ayah = $this->request->getPost('nama_ayah');
            $nama_ibu = $this->request->getPost('nama_ibu');
            $status = $this->request->getPost('status');

            // Load model untuk mengakses tabel
            $model = new DataSiswaModel();

            // Buat array data baru yang akan di-update
            $dataToUpdate = [
                'nama' => $nama,
                'nik' => $nik,
                'gender' => $gender,
                'pekerjaan' => $pekerjaan,
                'telp' => $telp,
                'tinggi_badan' => $tinggi_badan,
                'berat_badan' => $berat_badan,
                'gol_darah' => $gol_darah,
                'tempat_lahir' => $tempat_lahir,
                'tg_lahir' => $tg_lahir,
                'alamat_dsn' => $alamat_dsn,
                'alamat_kec' => $alamat_kec,
                'alamat_kab' => $alamat_kab,
                'pend_terakhir' => $pend_terakhir,
                'jurusan' => $jurusan,
                'lulus_tahun' => $lulus_tahun,
                'nama_ayah' => $nama_ayah,
                'nama_ibu' => $nama_ibu,
                'status' => $status
            ];

            // Lakukan update data siswa berdasarkan NID
            $updateResult = $model->update($nid, $dataToUpdate);

            if ($updateResult) {
                // Jika update berhasil, redirect ke halaman berhasil
                session()->setFlashdata('sukses', 'berhasil mengubah data');
            } else {
                // Jika update gagal, tampilkan pesan error atau ulangi proses update
                session()->setFlashdata('gagal', 'kesalahan input perubahan data');
            }
        } else {
            session()->setFlashdata('gagal', 'kesalahan input perubahan data');
        }
        return redirect()->to(base_url('user/data/lihat'));
    }

    public function sertifikat()
    {
        $nid = session()->get('username');
        $model = new SertifikatModel();

        $data = $model->where('nid', $nid)->findAll();

        $array_ret = array(
            'title' => 'Lihat Sertifikat User',
            'sertifikat' => $data,
            'isi' => 'user/v_sertifikat/v_lihatsertif'
        );

        return view('layout/v_wrapper', $array_ret);
    }

    public function tambahsertif()
    {
        $data = array(
            'title' => 'Tambah Sertifikat User',
            'isi' => 'user/v_sertifikat/v_tambahdok'
        );
        return view('layout/v_wrapper', $data);
    }

    public function editsertifikat()
    {
        $model = new SertifikatModel();

        $array_ret = array(
            'title' => 'Edit Data User',
            'data' => $model->find($this->request->getPost('id')),
            'isi' => 'user/v_sertifikat/v_editsertif'
        );

        return view('layout/v_wrapper', $array_ret);
    }

    public function pembayaran()
    {
        $pembayaranModel = new PembayaranModel();
    
        $nid = session()->get('username');
        $data = array(
            'title' => 'Pembayaran User',
            'data' => $pembayaranModel->where('nid', $nid)->findAll(),
            'isi' => 'user/v_pembayaran/v_lihatpembayaran'
        );
        return view('layout/v_wrapper', $data);
    }

    public function dokumen()
    {
        $nid = session()->get('username');
        $model = new DokumenSiswaModel();

        $data = $model->where('nid', $nid)->findAll();

        $array_ret = array(
            'title' => 'Lihat Dokumen User',
            'dokumen' => $data,
            'isi' => 'user/v_dokumen/v_lihatdok'
        );

        return view('layout/v_wrapper', $array_ret);
    }

    public function tambahdok()
    {
        $data = array(
            'title' => 'Tambah Dokumen User',
            'isi' => 'user/v_dokumen/v_tambahdok'
        );
        return view('layout/v_wrapper', $data);
    }

    public function editdokumen()
    {
        $model = new DokumenSiswaModel();

        $array_ret = array(
            'title' => 'Edit Data User',
            'data' => $model->find($this->request->getPost('id')),
            'isi' => 'user/v_dokumen/v_editdok'
        );

        return view('layout/v_wrapper', $array_ret);
    }
}
