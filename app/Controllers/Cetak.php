<?php

namespace App\Controllers;

use App\Models\CetakPendaftar;
use App\Models\PembayaranModel;


class Cetak extends BaseController
{
    public function print($nid)
    {
        $model = new CetakPendaftar();
        $data['cetak'] = $model->tampil_data($nid)->getResult();
        return view('admin/v_validasipendaftar/print_data', $data);
    }
    public function print_bmt($nid)
    {
        $model = new CetakPendaftar();
        $data['cetak'] = $model->tampil_data_bmt($nid)->getResult();
        return view('admin/v_validasipendaftar/print_data_bmt', $data);
    }
}
