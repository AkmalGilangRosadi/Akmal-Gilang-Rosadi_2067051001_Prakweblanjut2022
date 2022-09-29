<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswa = $mahasiswaModel->findAll();
        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];

        return view('mahasiswa/list', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Mahasiswa'
        ];

        return view('mahasiswa/create', $data);
    }


    public function store()
    {
        if (!$this->validate(
            [
                'npm' => 'required',
                'nama' => 'required',
                'alamat' => 'required',

            ]
        )) {
            return redirect()->to('/create');
        }
        $mahasiswaModel = new MahasiswaModel();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ];
        $mahasiswaModel->save($data);

        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswaModel->delete($id);

        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa_Model = new MahasiswaModel();
        $data =
            [
                'mahasiswa' => $mahasiswa_Model->find($id),
                'title' => 'Edit Mahasiswa'
            ];
        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate(
            [
                'npm' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'deskripsi' => 'required'

            ]
        )) {
            return redirect()->to('/edit/' . $id);
        }
        $mahasiswaModel = new MahasiswaModel();
        $data = [
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi')
        ];
        $mahasiswaModel->update($id, $data);

        return redirect()->to('/mahasiswa');
    }
}
