<?php

namespace App\Controllers;

use App\Models\DataSiswaModel;

class Menu extends BaseController
{
    private $DataSiswaModel;

    public function __construct()
    {
        $this->DataSiswaModel = new DataSiswaModel();
        helper('form');
    }

    public function dashboard()
    {
        // $jumlahSiswa = $this->DataSiswaModel->jumlahSiswa();

        $data = array(
            'title' => 'Dashboard',
            'isi' => 'v_dashboard',
            'siswa' => $this->DataSiswaModel->jumlahSiswa(),
            'pendaftar' => $this->DataSiswaModel->jumlahPendaftar(),
            'statistics' => $this->DataSiswaModel->getStatistics()
        );
        return view('layout/v_wrapper', $data);
    }

    public function home()
    {
        $data = array(
            'title' => 'Dashboard',
            'isi' => 'v_dashboard',
            'siswa' => $this->DataSiswaModel->jumlahSiswa(),
            'pendaftar' => $this->DataSiswaModel->jumlahPendaftar(),
            'statistics' => $this->DataSiswaModel->getStatistics()
        );
        return view('layout/v_wrapper', $data);
    }
}
