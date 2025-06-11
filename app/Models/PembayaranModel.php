<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id'; // Assuming "nid" is the primary key.
    protected $allowedFields = [
        'id',
        'nid',
        'kdbayar',
        'jenis',
        'tanggal',
        'tagihan',
        'terbayar',
        'status',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nid' => 'required|numeric',
        'jenis' => 'required',
        'tanggal' => 'required|valid_date',
        'tagihan' => 'required',
        'terbayar' => 'required',
        'status' => 'required|in_list[Belum Lunas,Lunas]',
    ];

    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function all_data()
    {
        return $this->db->table('pembayaran')
            ->orderBy('nid', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function findByKd($kdbayar)
    {
        return $this->db->table('pembayaran')
            ->where('kdbayar', $kdbayar)
            ->get()
            ->getResultArray();
    }

    public function deleteByNID($nid)
    {
        return $this->db->table('pembayaran')
            ->where('nid', $nid)
            ->delete();
    }
    public function tampil_data_bayar($nid)
    {
        return $this->builder()
            ->where(["nid" => $nid])
            ->get();
    }
}
