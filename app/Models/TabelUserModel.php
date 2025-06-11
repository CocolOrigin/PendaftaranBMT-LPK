<?php

namespace App\Models;

use CodeIgniter\Model;

class TabelUserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'nama_user',
        'username',
        'password',
        'role',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    // protected $validationRules      = [
    //     'id' => 'required|numeric',
    //     'nama_user' => 'required',
    //     'username' => 'required',
    //     'password' => 'required',
    //     'role' => 'required',
    // ];

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

    public function data()
    {
        return $this->db->table('tb_user')
            ->get()
            ->getResultArray();
    }

public function updateRole($username, $role)
{
$dataToUpdate = [
'role' => $role
];
$this->db->table($this->table)->where('username', $username)->update($dataToUpdate);
}

public function updateNama($username, $nama_user)
{
$dataToUpdate = [
'nama_user' => $nama_user
];
$this->db->table($this->table)->where('username', $username)->update($dataToUpdate);
}

    public function hapusRole($username)
    {
        return $this->db->table($this->table)
            ->where('username', $username)
            ->delete();
    }

    public function profil($username)
    {
        return $this->db->table($this->table)
            ->where('username', $username)
            ->get()
            ->getResultArray();
    }
}
