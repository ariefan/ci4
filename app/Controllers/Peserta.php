<?php

namespace App\Controllers;

use App\Models\PesertaModel;
use CodeIgniter\Controller;

class Peserta extends Controller
{
    public function index()
    {
        $model = new PesertaModel();
        $data['peserta'] = $model->findAll();
        echo view('peserta/index', $data);
    }

    public function create()
    {
        echo view('peserta/form');
    }

    public function store()
    {
        $model = new PesertaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
        ];
        $model->save($data);
        return redirect()->to('/peserta');
    }

    public function edit($id)
    {
        $model = new PesertaModel();
        $data['peserta'] = $model->find($id);
        echo view('peserta/form', $data);
    }

    public function update($id)
    {
        $model = new PesertaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
        ];
        $model->update($id, $data);
        return redirect()->to('/peserta');
    }

    public function delete($id)
    {
        $model = new PesertaModel();
        $model->delete($id);
        return redirect()->to('/peserta');
    }
}
