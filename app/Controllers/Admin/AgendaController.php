<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AgendaController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Agenda Menu',
            'daftar_agenda' => $this->AgendaModel->findAll(),
        ];
        return view('admin/pages/agenda', $data);
    }

    // POST Method
    public function storeAgenda()
    {
        $validation = \Config\Services::validation();

        // Define validation rules
        $rules = [
            'nama_agenda' => 'required',
            'hari_agenda' => 'required',
            'tanggal_agenda' => 'required',
            'jam_agenda' => 'required',
            'tempat_agenda' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }

        $slug = url_title($this->request->getPost('nama_agenda'), '-', TRUE);
        $data = [
            'nama_agenda' => $this->request->getPost('nama_agenda'),
            'hari_agenda' => $this->request->getPost('hari_agenda'),
            'tanggal_agenda' => $this->request->getPost('tanggal_agenda'),
            'jam_agenda' => $this->request->getPost('jam_agenda'),
            'tempat_agenda' => $this->request->getPost('tempat_agenda'),
            'slug_agenda' => $slug,
        ];
        $this->AgendaModel->insert($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan !');
    }

    // UPDATE Method
    public function updatAagenda($id_agenda)
    {
        $validation = \Config\Services::validation();

        // Define validation rules
        $rules = [
            'nama_agenda' => 'required',
            'hari_agenda' => 'required',
            'tanggal_agenda' => 'required',
            'jam_agenda' => 'required',
            'tempat_agenda' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }

        $slug = url_title($this->request->getPost('nama_agenda'), '-', TRUE);
        $data = [
            'nama_agenda' => $this->request->getPost('nama_agenda'),
            'hari_agenda' => $this->request->getPost('hari_agenda'),
            'tanggal_agenda' => $this->request->getPost('tanggal_agenda'),
            'jam_agenda' => $this->request->getPost('jam_agenda'),
            'tempat_agenda' => $this->request->getPost('tempat_agenda'),
            'slug_agenda' => $slug,
        ];
        $this->AgendaModel->update($id_agenda, $data);

        return redirect()->back()->with('success', 'Data berhasil diubah !');
    }

    // DELETE Method
    public function deleteAgenda($id_agenda)
    {
        $this->AgendaModel->delete($id_agenda);

        return redirect()->back()->with('success', 'Data berhasil dihapus !');
    }
}
