<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PengumumanController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pengumuman Menu',
            'daftar_pengumuman' => $this->PengumumanModel->FindAll(),
        ];
        return view('admin/pages/pengumuman', $data);
    }

    // POST Method
    public function storePengumuman()
    {
        $gambar = $this->request->getFile('gambar_pengumuman');
        $namaGambar = $gambar->getRandomName();
        $gambar->move(WRITEPATH . '../public/Assets/Images/', $namaGambar);

        $slug = url_title($this->request->getPost('judul_pengumuman'), '-', TRUE);
        $data = [
            'judul_pengumuman' => esc($this->request->getPost('judul_pengumuman')),
            'deskripsi_pengumuman' => esc($this->request->getPost('deskripsi_pengumuman')),
            'link_pengumuman' => esc($this->request->getPost('link_pengumuman')),
            'gambar_pengumuman' => $namaGambar,
            'slug_pengumuman' => $slug,
        ];
        $this->PengumumanModel->insert($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan !');
    }

    // UPDATE Method
    public function updatePengumuman($id_pengumuman)
    {
        $gambar = $this->request->getFile('gambar_pengumuman');
        var_dump($gambar);
        $namaGambar = $gambar->getRandomName();
        $gambar->move(WRITEPATH . '../public/Assets/Images/', $namaGambar);
        // $filepath->move(WRITEPATH . '../public/Assets/Images/', $gambar);

        // dd($_POST);
        $slug = url_title($this->request->getPost('judul_pengumuman'), '-', TRUE);
        $data = [
            'judul_pengumuman' => esc($this->request->getPost('judul_pengumuman')),
            'deskripsi_pengumuman' => esc($this->request->getPost('deskripsi_pengumuman')),
            'link_pengumuman' => esc($this->request->getPost('link_pengumuman')),
            'gambar_pengumuman' => $namaGambar,
            'slug_pengumuman' => $slug,
        ];
        $this->PengumumanModel->update($id_pengumuman, $data);

        return redirect()->back()->with('success', 'Data berhasil diedit !');
    }

    // DELETE Method
    public function deletePengumuman($id_pengumuman)
    {
        $this->PengumumanModel->where('id_pengumuman', $id_pengumuman)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus !');
    }
}
