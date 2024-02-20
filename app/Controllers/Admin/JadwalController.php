<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class JadwalController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Jadwal Menu',
            'daftar_jadwal' => $this->JadwalModel->findAll(),
        ];
        return view('admin/pages/jadwal', $data);
    }

    // POST Method
    public function storeJadwal()
    {
        $validation = \Config\Services::validation();

        // Define validation rules
        $rules = [
            'nama_jadwal' => 'required',
            'hari_jadwal' => 'required',
            'tanggal_jadwal' => 'required',
            'jam_jadwal' => 'required',
            'tempat_jadwal' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }

        $slug = url_title($this->request->getPost('nama_jadwal'), '-', TRUE);
        $data = [
            'nama_jadwal' => $this->request->getPost('nama_jadwal'),
            'hari_jadwal' => $this->request->getPost('hari_jadwal'),
            'tanggal_jadwal' => $this->request->getPost('tanggal_jadwal'),
            'jam_jadwal' => $this->request->getPost('jam_jadwal'),
            'tempat_jadwal' => $this->request->getPost('tempat_jadwal'),
            'slug_jadwal' => $slug,
        ];
        $this->JadwalModel->insert($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan !');
    }

    // UPDATE Method
    public function updateJadwal($id_jadwal)
    {
        $validation = \Config\Services::validation();

        // Define validation rules
        $rules = [
            'nama_jadwal' => 'required',
            'hari_jadwal' => 'required',
            'tanggal_jadwal' => 'required',
            'jam_jadwal' => 'required',
            'tempat_jadwal' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }

        $slug = url_title($this->request->getPost('nama_jadwal'), '-', TRUE);
        $data = [
            'nama_jadwal' => $this->request->getPost('nama_jadwal'),
            'hari_jadwal' => $this->request->getPost('hari_jadwal'),
            'tanggal_jadwal' => $this->request->getPost('tanggal_jadwal'),
            'jam_jadwal' => $this->request->getPost('jam_jadwal'),
            'tempat_jadwal' => $this->request->getPost('tempat_jadwal'),
            'slug_jadwal' => $slug,
        ];
        $this->JadwalModel->update($id_jadwal, $data);

        return redirect()->back()->with('success', 'Data berhasil diubah !');
    }

    // DELETE Method
    public function deleteJadwal($id_jadwal)
    {
        $this->JadwalModel->delete($id_jadwal);

        return redirect()->back()->with('success', 'Data berhasil dihapus !');
    }
}
