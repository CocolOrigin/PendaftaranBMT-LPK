<?php

namespace App\Controllers;

use App\Models\TabelUserModel;

class TabelUser extends BaseController
{
    public function profil()
    {
        $model = new TabelUserModel();
        $data = $model->profil(session()->get('username'));
        // print_r($data);

        $array_ret = array(
            'title' => 'Edit User',
            'data' => $data,
            'isi' => 'v_profil'
        );
        return view('layout/v_wrapper', $array_ret);
    }

    public function index()
    {
        $model = new TabelUserModel();
        $data = array(
            'title' => 'Tabel Data User',
            'data' => $model->data(),
            'isi' => 'admin/v_tabeluser/v_tabeluser'
        );
        return view('layout/v_wrapper', $data);
    }


    public function edit()
    {
        $model = new TabelUserModel();
        $id = $this->request->getPost('id');
        $data = $model->find($id);
        $array_ret = array(
            'title' => 'Edit User',
            'data' => $data,
            'isi' => 'admin/v_tabeluser/v_edituser'
        );
        return view('layout/v_wrapper', $array_ret);
    }

    public function update()
    {
        $validationRules = [
            'id' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ];

        if ($this->validate($validationRules)) {
            $id = $this->request->getPost('id');
            $dataToUpdate = [
                'id' => $id,
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'role' => $this->request->getPost('role'),
            ];

            $model = new TabelUserModel();
            $updateResult = $model->update($id, $dataToUpdate);
            if ($updateResult) {
                session()->setFlashdata('suksesedit', 'berhasil mengubah data');
            } else {
                session()->setFlashdata('gagaledit', 'kesalahan input perubahan data');
            }
        } else {
            session()->setFlashdata('gagaledit', 'kesalahan input perubahan data');
        }

        if (session()->get('role')==1) {
            return redirect()->to(base_url('tabeluser/index'));
        } else {
            return redirect()->to(base_url('profil'));
        }
    }

    public function formtambah()
    {
        $array_ret = array(
            'title' => 'Tambah User',
            'isi' => 'admin/v_tabeluser/v_tambahuser'
        );
        return view('layout/v_wrapper', $array_ret);
    }

    public function store()
    {
        $model = new TabelUserModel();

        $validationRules = [
            'nama_user' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            session()->setFlashdata('gagal', 'terjadi kesalahan input, coba lagi');
            return redirect()->to(base_url('tabeluser/index'));
        }

        // Ambil data dari form
        $data = [
            'nama_user' => $this->request->getPost('nama_user'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('role'),
        ];

        // Simpan data ke dalam database
        $model->insert($data);

        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        return redirect()->to(base_url('tabeluser/index'));
    }

}
