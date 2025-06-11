<?php

namespace App\Models;

use CodeIgniter\Model;

class SertifikatModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'sertifikat';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nid', 'jenis', 'nama_sertifikat', 'file_sertifikat',  'status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
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
        return $this->db->table('sertifikat')
        ->get()
        ->getResultArray();
    }

    public function one_data()
    {
        return $this->db->table('sertifikat')
        ->join("datasiswa","datasiswa.nid=sertifikat.nid")
        ->get()
        ->getResultArray();
    }

    public function findById($nid)
    {
        return $this->db->table('sertifikat')
            ->where('nid', $nid)
            ->get()
            ->getResultArray();
    }
}
