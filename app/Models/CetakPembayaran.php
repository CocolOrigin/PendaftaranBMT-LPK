<?php

namespace App\Models;

use CodeIgniter\Model;

class CetakPembayaran extends Model
{
    protected $table = 'pembayaran'; // specify the table name

    public function tampil_data_bayar($nid)
    {
        return $this->builder()
            ->where(["nid" => $nid])
            ->get();
    }
}
