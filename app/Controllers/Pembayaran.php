<?php

namespace App\Controllers;

use App\Models\DataSiswaModel;
use App\Controllers\BaseController;
use App\Models\PembayaranModel;

use function PHPUnit\Framework\stringContains;

class Pembayaran extends BaseController
{
    private $PembayaranModel;

    public function __construct()
    {
        $this->PembayaranModel = new PembayaranModel();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Pembayaran Siswa',
            'statusData' => $this->PembayaranModel->findAll(),
            'isi' => 'admin/v_pembayaran/v_masterpembayaran'
        );
        return view('layout/v_wrapper', $data);
    }

    public function lihat($nid)
    {
        $data = array(
            'title' => 'Pembayaran Siswa',
            'data' => $this->PembayaranModel->where('nid', $nid)->findAll(),
            'terbayar' => $this->PembayaranModel->selectSum('terbayar')->where('nid', $nid)->first(),
            'isi' => 'admin/v_pembayaran/v_tabelpembayaran',
            'nid' => $nid
        );
        return view('layout/v_wrapper', $data);
    }

    public function formtambah()
    {
        $model = new DataSiswaModel();
        $data = array(
            'title' => 'Tambah Pembayaran',
            'datanid' => $model->all_data(),
            'isi' => 'admin/v_pembayaran/v_tambahpembayaran'
        );
        return view('layout/v_wrapper', $data);
    }

    public function formtambahpaket()
    {
        $model = new DataSiswaModel();
        $data = array(
            'title' => 'Tambah Paket Pembayaran',
            'datanid' => $model->all_data(),
            'isi' => 'admin/v_pembayaran/v_tambahpaketpembayaran'
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
        return redirect()->to(base_url('pembayaran/index'));
    }

    public function storeEach()
    {
        $model = new PembayaranModel();

        $validationRules = [
            'nid' => 'required|numeric',
            'jenis' => 'required',
            'tagihan' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            session()->setFlashdata('gagal', 'terjadi kesalahan input, coba lagi');
            return redirect()->to(base_url('pembayaran/index'));
        }

        $data = [
            'nid' => $this->request->getPost('nid'),
            'jenis' => $this->request->getPost('jenis'),
            'kdbayar' => $this->request->getPost('nid') . "_" . $this->request->getPost('jenis'),
            'tanggal' => date('Y-m-d'),
            'tagihan' => $this->request->getPost('tagihan'),
            'terbayar' => "0",
            'status' => "Belum Lunas"
        ];

        if ($model->insert($data)) {
            session()->setFlashdata('sukses', 'Data berhasil ditambahkan');
        } else {
            session()->setFlashdata('gagal', 'Gagal menambahkan data');
        }
        return redirect()->to(base_url('pembayaran/index'));
    }

    public function hapus($nid)
    {
        $model = new PembayaranModel();

        if ($model->deleteByNID($nid)) {
            session()->setFlashdata('sukses', 'Berhasil hapus data');
        } else {
            session()->setFlashdata('gagal', 'Gagal menghapus data');
        }

        return redirect()->to(base_url('pembayaran/index'));
    }

    public function edit($kdbayar)
    {
        $model = new PembayaranModel();
        $array = $model->findByKd($kdbayar);

        $array_ret = array(
            'title' => 'Edit Data Siswa',
            'data' => $array,
            'isi' => 'admin/v_pembayaran/v_editpembayaran'
        );
        return view('layout/v_wrapper', $array_ret);
    }

    public function update()
    {
        $validationRules = [
            'kdbayar' => 'required',
            'nid' => 'required|numeric',
            'jenis' => 'required',
            'tagihan' => 'required|numeric',
            'terbayar' => 'required|numeric',
        ];

        $kd = (string) $this->request->getPost('kdbayar');
        $urlNID = substr($kd, 0, strpos($kd, '_'));;

        if ($this->validate($validationRules)) {
            // Ambil data dari form
            $id = $this->request->getPost('id');
            $kdbayar = $this->request->getPost('kdbayar');
            // $nid = $this->request->getPost('nid');
            // $jenis = $this->request->getPost('jenis');
            $tagihan = $this->request->getPost('tagihan');
            $terbayar = $this->request->getPost('terbayar');
            $status = "Belum Lunas";
            $sisa = "0";

            $model = new PembayaranModel();
            if ($terbayar == $tagihan) {
                $status = "Lunas";
            }
            if ($terbayar > $tagihan) {
                $status = "Lunas";
                $sisa = $terbayar - $tagihan;
                $terbayar = $tagihan;
            }

            $dataToUpdate = [
                'tagihan' => $tagihan,
                'terbayar' => $terbayar,
                'status' => $status,
            ];
            $updateResult = $model->update($id, $dataToUpdate);

            if ($updateResult && $sisa > 0) {
                session()->setFlashdata('sukses', 'berhasil mengubah data, sisa pembayaran Rp ' . $sisa);
            }
            if ($updateResult) {
                session()->setFlashdata('sukses', 'berhasil mengubah data');
            }
            if (!$updateResult) {
                session()->setFlashdata('gagal', 'kesalahan input perubahan data');
            }
        } else {
            session()->setFlashdata('gagal', 'kesalahan input perubahan data');
        }
        return redirect()->to(base_url('pembayaran/lihat/' . $urlNID));
    }
    public function print_pembiayaan($nid)
    {
        //$nid = $this->request->getPost('nid');
        $data = array(
            'title' => 'Cetak Pembayaran',
            'data' => $this->PembayaranModel->where('nid', $nid)->findAll(),
            'terbayar' => $this->PembayaranModel->selectSum('terbayar')->where('nid', $nid)->first(),
            'kurang' => $this->PembayaranModel->query('SELECT SUM(tagihan - terbayar) AS selisih FROM pembayaran WHERE nid = ' . $nid)->getRow(),

            // 'kurang' => $this->PembayaranModel->selectSum('(terbayar - tagihan) AS selisih')->where('nid', $nid)->first(),
            // 'isi' => 'admin/v_pembayaran/print_pembayaran' // Ganti dengan view yang sesuai
        );
        return view('admin/v_pembayaran/print_pembayaran', $data); // Ganti dengan view print yang sesuai
    }
}
