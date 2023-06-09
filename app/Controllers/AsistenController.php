<?php

namespace App\Controllers;

use App\Models\AsistenModel;

class AsistenController extends BaseController
{
    public function index()
    {
        $model = model(AsistenModel::class);

        $data = [
            'asisten'  => $model->getAsisten(),
            'title' => 'Data Asisten'
        ];

        return view('AsistenView', $data);
    }

    public function simpan()
    {
        helper('form');
        if (!$this->request->is('post')) {
            return view('/asisten/simpan');
        }
        $post = $this->request->getPost(['nim', 'nama', "praktikum", "ipk"]);
        $model = model(AsistenModel::class);
        $model->simpan($post);
        return view('/asisten/success');
    }

    public function delete()
    {
        $db = \config\Database::connect();
        $builder = $db->table('asisten');
        helper('form');
        if (!$this->request->is('post')) {
            return view('/asisten/delete');
        }
        $nim = $this->request->getPost('nim');
        $result = $builder->getWhere(['nim' => $nim])->getResult();
        if (count($result) == 0) {
            return "NIM tidak ditemukan!";
        }
        $builder->where('nim', $nim);
        $builder->delete();
        return view('/asisten/successDelete');
    }

    public function update()
    {
        $db = \config\Database::connect();
        $builder = $db->table('asisten');
        helper('form');
        if (!$this->request->is('post')) {
            return view('/asisten/update');
        }
        $data = ['nama' => [$this->request->getPost('nama')], 'praktikum' => [$this->request->getPost('praktikum')], 'ipk' => [$this->request->getPost('ipk')]];
        $builder->where('nim', $this->request->getPost('nim'));
        $builder->update($data);
        return view('/asisten/success');
    }

    public function search()
    {
        if (!$this->request->is('post')) {
            return view('/asisten/search');
        }
        $nim = $this->request->getPost(['key']);

        $model = model(AsistenModel::class);
        $asisten = $model->ambil($nim['key']);

        $data = ['hasil' => $asisten];
        return view('/asisten/search', $data);
    }

    public function check()
    {
        if (!$this->request->is('post')) {
            return view('/asisten/login');
        }

        $post = $this->request->getPost(['usr', 'pwd']);
        $model = model(LoginModel::class);
        $asisten = $model->ambil($post['usr']);
    }

    public function logout()
    {

        $session = session();
        $session->remove('pengguna');
        return view('/asisten/login');
    }
}
