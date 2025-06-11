<?php

namespace App\Models;

use CodeIgniter\Model;

class CetakPendaftar extends Model {
    protected $table = 'datasiswa'; // specify the table name

    public function tampil_data($nid){
        return $this->builder()
        ->where(["nid"=>$nid])
        ->get();
    }
    public function tampil_data_bmt($nid){
        return $this->builder()
        ->where(["nid"=>$nid])
        ->get();
    }
}
