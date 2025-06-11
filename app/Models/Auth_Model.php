<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_Model extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id'; // Assuming "nid" is the primary key.
    protected $allowedFields = [
        'nama_user',
        'username',
        'password',
        'role',
    ];

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

    public function save_register($data)
    {
        $this->db->table('tb_user')->insert($data);
    }

    public function login($username, $password)
    {
        return $this->db->table('tb_user')->where([
            'username' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }

    public function all_data()
    {
        return $this->db->table('tb_user')
            ->get()
            ->getResultArray();
    }

    public function updateRole($username)
    {
        $dataToUpdate = [
            'role' => 2
        ];
        $this->db->table($this->table)->where('username', $username)->update($dataToUpdate);
    }

    public function hapusRole($username)
    {
        return $this->db->table($this->table)
            ->where('username', $username)
            ->delete();
    }
}
