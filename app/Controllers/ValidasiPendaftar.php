<?php

namespace App\Controllers;

use App\Models\DataSiswaModel;
use App\Models\DokumenSiswaModel;
use App\Models\PembayaranModel;
use App\Models\TabelUserModel;

class ValidasiPendaftar extends BaseController
{
    private $DataSiswaModel;
    private $DokumenSiswaModel;

    public function __construct()
    {
        $this->DataSiswaModel = new DataSiswaModel();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Pendaftar',
            'datasiswa' => $this->DataSiswaModel->pendaftar(),
            'isi' => 'admin/v_validasipendaftar/v_mastertabel'
        );
        return view('layout/v_wrapper', $data);
    }

    public function indexinfo()
    {
        
        $data = array(
            'title' => 'Data Pendaftar',
            'datasiswa' => $this->DataSiswaModel->pendaftar(),
            'isi' => 'admin/v_validasipendaftar/v_mastertabel'
        );
        return view('layout/v_wrapper', $data);
    }

    public function dokumen($nid)
    {
        $model = new DokumenSiswaModel();

        $data = $model->where('nid', $nid)->findAll();

        $array_ret = array(
            'title' => 'Lihat Dokumen Pendaftar',
            'dokumen' => $data,
            'isi' => 'admin/v_validasipendaftar/v_dokumenpendaftar'
        );

        return view('layout/v_wrapper', $array_ret);
    }

public function lihat($nid)
{
    $model = new DataSiswaModel();

    $data = $model->find($nid);

    $array_ret = array(
        'title' => 'Lihat Data Siswa',
        'datasiswa' => $data,
        'isi' => 'admin/v_validasipendaftar/v_datapendaftar'
    );

    return view('layout/v_wrapper', $array_ret);
}

    public function bayar($nid)
    {
        $model = new DataSiswaModel();
        $data = array(
            'title' => 'Tambah Paket Pembayaran',
            'nid' => $nid,
            'isi' => 'admin/v_validasipendaftar/v_tambahpembayaran'
        );
        return view('layout/v_wrapper', $data);
    }

    public function storeAll()
    {
        $model = new PembayaranModel();

        $nid = $this->request->getPost('nid');

        $existingRecord = $model->where('nid', $nid)->first();
        if ($existingRecord) {
            session()->setFlashdata('gagal', 'NID tersebut sudah memiliki data pembayaran');
            return redirect()->to(previous_url())->withInput();
        }

        $validationRules = [
            'nid' => 'required|numeric',
            'tagihan' => 'required|numeric',
        ];

        if (!$this->validate($validationRules)) {
            session()->setFlashdata('gagal', 'terjadi kesalahan input, coba lagi');
            return redirect()->to(base_url('pembayaran/index'));
        }

        $tgl = date('Y-m-d');

        $data = [
            'nid' => $this->request->getPost('nid'),
            'jenis' => "DP",
            'kdbayar' => $this->request->getPost('nid') . "_DP",
            'tanggal' => $tgl,
            'tagihan' => $this->request->getPost('tagihan'),
            'terbayar' => $this->request->getPost('tagihan'),
            'status' => "Lunas",
        ];

        if ($model->insert($data)) {

            for ($inc = 1; $inc <= 6; $inc++) {
                $hitung = (8000000 - $this->request->getPost('tagihan')) / 6;
                $tgl = date('Y-m-d', strtotime("+{$inc} months"));
                $jenis = "SPP-" . $inc;
                $data = [
                    'nid' => $this->request->getPost('nid'),
                    'jenis' => $jenis,
                    'kdbayar' => $this->request->getPost('nid') . "_" . $jenis,
                    'tanggal' => $tgl,
                    'tagihan' => $hitung,
                    'terbayar' => "0",
                    'status' => "Belum Lunas",

                ];
                // print_r($data);
                if ($inc <= 5) {
                    $model->insert($data);
                }
            }

            if ($model->insert($data)) {
                session()->setFlashdata('sukses', 'Data berhasil ditambahkan');
            } else {
                session()->setFlashdata('gagal', 'Gagal menambahkan data');
            }
        } else {
            session()->setFlashdata('gagal', 'Gagal menambahkan data');
        }
        return redirect()->to(base_url('pendaftar/tabel'));
    }

    public function terima()
    {
$DataSiswaModel = new DataSiswaModel();
$nid = $this->request->getPost('nid');

$dataToUpdate = [
    'status' => "siswa"
];
$DataSiswaModel->update($nid, $dataToUpdate);

$authModel = new TabelUserModel(); // Ganti dengan nama model Anda
$username = $nid;
$authModel->updateRole($username, $role = "2");

        session()->setFlashdata('updaterole', 'berhasil mengupdate menjadi siswa');
        return redirect()->to(previous_url());
    }

    public function valid()
    {
        $model = new DokumenSiswaModel();
        $id = $this->request->getPost('id');
        $data = $model->find($id);

        if ($data['status'] == "valid") {
            $status = "invalid";
        } else {
            $status = "valid";
        }

        $dataToUpdate = [
            'status' => $status,
        ];

        if ($model->update($id, $dataToUpdate)) {
            return redirect()->to(previous_url())->with('sukses', 'Document successfully validated.');
        } else {
            $errors = $model->errors();
            return redirect()->to(previous_url())->with('gagal', 'Failed to validate document.');
        }
    }
}
