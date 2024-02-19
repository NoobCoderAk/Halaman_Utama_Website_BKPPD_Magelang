<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ArtikelController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Artikel Menu',
            'daftar_artikel' => $this->ArtikelModel->FindAll(),
        ];
        return view('admin/pages/artikel', $data);
    }

    // POST Method
    public function storeArtikel()
    {
        $gambar = $this->request->getFile('gambar_artikel');
        $namaGambar = $gambar->getRandomName();
        $gambar->move(WRITEPATH . '../public/Assets/Images/', $namaGambar);

        $slug = url_title($this->request->getPost('judul_artikel'), '-', TRUE);
        $data = [
            'judul_artikel' => esc($this->request->getPost('judul_artikel')),
            'deskripsi_artikel' => esc($this->request->getPost('deskripsi_artikel')),
            'link_artikel' => esc($this->request->getPost('link_artikel')),
            'gambar_artikel' => $namaGambar,
            'slug_artikel' => $slug,
        ];
        $this->ArtikelModel->insert($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan !');
    }

    // UPDATE Method
    public function updateArtikel($id_artikel)
    {
        $gambar = $this->request->getFile('gambar_artikel');
        var_dump($gambar);
        $namaGambar = $gambar->getRandomName();
        $gambar->move(WRITEPATH . '../public/Assets/Images/', $namaGambar);
        // $filepath->move(WRITEPATH . '../public/Assets/Images/', $gambar);

        // dd($_POST);
        $slug = url_title($this->request->getPost('judul_artikel'), '-', TRUE);
        $data = [
            'judul_artikel' => esc($this->request->getPost('judul_artikel')),
            'deskripsi_artikel' => esc($this->request->getPost('deskripsi_artikel')),
            'link_artikel' => esc($this->request->getPost('link_artikel')),
            'gambar_artikel' => $namaGambar,
            'slug_artikel' => $slug,
        ];
        $this->ArtikelModel->update($id_artikel, $data);

        return redirect()->back()->with('success', 'Data berhasil diedit !');
    }

    // DELETE Method
    public function deleteArtikel($id_artikel)
    {
        $this->ArtikelModel->where('id_artikel', $id_artikel)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus !');
    }
}
