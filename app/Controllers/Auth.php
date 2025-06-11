<?php

namespace App\Controllers;

use App\Models\Auth_Model;
use App\Models\DataSiswaModel;

use function PHPUnit\Framework\equalTo;

class Auth extends BaseController
{
    private $Auth_Model;
    public function __construct()
    {
        helper('form');
        $this->Auth_Model = new Auth_Model();
    }

    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('v_login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'username'  => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!'
                ]
            ],
            'password'  => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!'
                ]
            ]
        ])) {
            //jika valid login
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // $dataSiswaModel = new \App\Models\DatasiswaModel();
            // $namasiswa = $dataSiswaModel->where('nid', $username)->first();
            // $nama = array($namasiswa);

            $cek = $this->Auth_Model->login($username, $password);

            if ($cek) {
                //jika data cocok
                session()->set('log', true);
                session()->set('nama_user', $cek['nama_user']);  
                session()->set('username', $cek['username']);
                session()->set('nid', $cek['username']);
                session()->set('role', $cek['role']);

                // if ($cek['role'] == "2") {
                //     return redirect()->to(base_url('homeuser'));
                // }
                // if ($cek['role'] . equalTo("1")) {
                //     return redirect()->to(base_url('homeuser'));
                // }
                // login sukses
                return redirect()->to(base_url('menu/dashboard'));
            } else {
                //jika data tidak cocok & login gagal
                session()->setFlashdata('pesan', 'Login gagal , cek username atau password !!!');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            //jika tidak valid login
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('username');
        session()->remove('role');
        $data = array(
            'title' => 'beranda',
        );
        return view('v_beranda', $data);
    }
}
