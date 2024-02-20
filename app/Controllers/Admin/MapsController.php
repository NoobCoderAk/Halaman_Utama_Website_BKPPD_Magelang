<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MapsController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Maps Menu',
            'daftar_maps' => $this->MapsModel->findAll(),
        ];
        return view('admin/pages/maps', $data);
    }

    // POST Method
    public function storeMaps()
    {
        $validation = \Config\Services::validation();

        // Define validation rules
        $rules = [
            'nama_maps' => 'required',
            'link_maps' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }

        $slug = url_title($this->request->getPost('link_maps'), '-', TRUE);
        $data = [
            'nama_maps' => $this->request->getPost('nama_maps'),
            'link_maps' => $this->request->getPost('link_maps'),
        ];
        $this->MapsModel->insert($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan !');
    }

    // UPDATE Method
    public function updateMaps($id_maps)
    {
        $validation = \Config\Services::validation();

        // Define validation rules
        $rules = [
            'nama_maps' => 'required',
            'link_maps' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }

        $slug = url_title($this->request->getPost('nama_maps'), '-', TRUE);
        $data = [
            'nama_maps' => $this->request->getPost('nama_maps'),
            'link_maps' => $this->request->getPost('link_maps'),
            'slug_maps' => $slug,
        ];
        $this->MapsModel->update($id_maps, $data);

        return redirect()->back()->with('success', 'Data berhasil diubah !');
    }

    // DELETE Method
    public function deleteMaps($id_maps)
    {
        $this->MapsModel->delete($id_maps);

        return redirect()->back()->with('success', 'Data berhasil dihapus !');
    }
}
