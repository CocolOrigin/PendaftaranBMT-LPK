<?php

namespace App\Controllers;

use App\Models\DataSiswaModel;
use App\Controllers\BaseController;
// use App\Models\Auth_Model;
use App\Models\TabelUserModel;

use function PHPUnit\Framework\stringContains;

class DataSiswa extends BaseController
{
    private $DataSiswaModel;

    public function __construct()
    {
        $this->DataSiswaModel = new DataSiswaModel();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Tabel Data Siswa',
            'datasiswa' => $this->DataSiswaModel->siswa(),
            'isi' => 'admin/v_datasiswa/v_tabeldatasiswa'
        );
        return view('layout/v_wrapper', $data);
    }

    public function formtambah()
    {
        $data = array(
            'title' => 'Tambah Data Siswa',
            'nextID' => $this->DataSiswaModel->nextID(),
            'isi' => 'admin/v_datasiswa/v_tambahdatasiswa'
        );
        return view('layout/v_wrapper', $data);
    }

    // public function create()
    // {
    //     $model = new DataSiswaModel();
    //     $nextNID = $model->nextID();
    //     $data = [
    //         'nextNID' => $nextNID,
    //     ];
    //     return view('registrasi/form', $data);
    // }

    public function store()
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
            return redirect()->to(base_url('datasiswa/index'));
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

        $usermodel = new TabelUserModel();
        $data = [
            'nama_user' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('nid'),
            'password' => $this->request->getPost('nid'),
            'role' => "3",
        ];
        $usermodel->insert($data);

        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        return redirect()->to(base_url('datasiswa/index'));
    }

public function hapus()
{
        $model = new DataSiswaModel();

        $nid = $this->request->getPost('nid');

        $siswa = $model->find($nid);
        if ($siswa) {
            $model->delete($nid);

            $model = new TabelUserModel();
            $model->hapusRole($nid);
            session()->setFlashdata('sukseshapus', 'Data siswa berhasil dihapus.');
        } else {
            session()->setFlashdata('gagalhapus', 'Data siswa tidak ditemukan.');
        }

        return redirect()->to(base_url('datasiswa/index'));
    }

    public function edit()
    {
        $model = new DataSiswaModel();
        $nid = $this->request->getPost('nid');
        $data = $model->find($nid);
        $array_ret = array(
            'title' => 'Edit Data Siswa',
            'datasiswa' => $data,
            'isi' => 'admin/v_datasiswa/v_editdatasiswa'
        );
        return view('layout/v_wrapper', $array_ret);
    }

    public function update()
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

            $usermodel = new TabelUserModel();
            $username = $nid;
            $usermodel->updateNama($username, $nama_user = $nama);
            if ($status == "pendaftar") {
                $usermodel->updateRole($username, $role = "3");
            } elseif ($status == "siswa" || $status == "lulus") {
                $usermodel->updateRole($username, $role = "2");
            } else {
                $usermodel->updateRole($username, $role = "1");
            }

            if ($updateResult) {
                // Jika update berhasil, redirect ke halaman berhasil
                session()->setFlashdata('suksesedit', 'berhasil mengubah data');
                return redirect()->to(base_url('datasiswa/index'));
            } else {
                // Jika update gagal, tampilkan pesan error atau ulangi proses update
                session()->setFlashdata('gagaledit', 'kesalahan input perubahan data');
                return redirect()->to(base_url('datasiswa/index'));
            }
        } else {
            session()->setFlashdata('gagaledit', 'kesalahan input perubahan data');
            return redirect()->to(base_url('datasiswa/index'));
        }
    }
}
