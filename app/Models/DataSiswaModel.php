<?php

namespace App\Models;

use CodeIgniter\Model;

class DataSiswaModel extends Model
{
    protected $table = 'datasiswa';
    protected $primaryKey = 'nid'; // Assuming "nid" is the primary key.
    protected $allowedFields = [
        'nid',
        'nik',
        'nama',
        'gender',
        'pekerjaan',
        'telp',
        'tempat_lahir',
        'tg_lahir',
        'alamat_dsn',
        'alamat_kec',
        'alamat_kab',
        'jurusan',
        'pend_terakhir',
        'lulus_tahun',
        'nama_ayah',
        'nama_ibu',
        'tinggi_badan',
        'berat_badan',
        'gol_darah',
        'tgl_daftar',
        'thn_daftar',
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
        'nik' => 'required|numeric',
        'nama' => 'required',
        'gender' => 'required|in_list[L,P]',
        'pekerjaan' => 'required',
        'telp' => 'required',
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
        'tgl_daftar' => 'required|valid_date',
        'thn_daftar' => 'required',
        'status' => 'required',
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

    //filter berdasarkan tahun dan mentotalkan

    public function siswa()
    {
        return $this->db->table('datasiswa')
            ->where('status', 'siswa')
            ->orderBy('nid', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function jumlahSiswa()
    {
        return $this->db->table('datasiswa')
            ->where('status', 'siswa')
            ->countAllResults();
    }

    public function jumlahPendaftar()
    {
        return $this->db->table('datasiswa')
            ->where('status', 'pendaftar')
            ->countAllResults();
    }

    public function all_data()
    {
        return $this->db->table('datasiswa')
            ->orderBy('nid', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function pendaftar()
    {
        return $this->db->table('datasiswa')
            ->where('status', 'pendaftar')
            ->orderBy('nid', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function nextID()
    {
        // Mengambil total data berdasarkan tahun terkini dari model
        $totalData = $this->where('thn_daftar', date('Y'))->countAllResults();
        $lastRow = $this->selectMax('nid')->where('thn_daftar', date('Y'))->get()->getRowArray();
        $lastNID = (int)$lastRow['nid'];
        $tahunTerkini = substr(date('Y'), 2);

        if ($totalData > 0) {
            $nextNID = $lastNID + 1;
        } else {
            $nextNID = sprintf('%02d%s%04d', $tahunTerkini, '01', $totalData + 1);
        }
        return $nextNID;
    }

    public function getStatistics()
    {
        $statistics = [
            'total_siswa' => $this->countAll(),
            'total_siswa_aktif' => $this->where('status', 'siswa')->countAllResults(),
            'total_siswa_nonaktif' => $this->where('status', 'nonaktif')->countAllResults(),
        ];

        return $statistics;
    }
}
