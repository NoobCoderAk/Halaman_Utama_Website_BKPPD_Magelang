<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class GaleriController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Galeri Menu',
            'daftar_galeri' => $this->GaleriModel->FindAll(),
        ];
        return view('admin/pages/galeri', $data);
    }

    // POST Method
    public function storeGaleri()
    {
        $gambar = $this->request->getFile('gambar_galeri');
        $namaGambar = $gambar->getRandomName();
        $gambar->move(WRITEPATH . '../public/Assets/Images/', $namaGambar);

        $slug = url_title($this->request->getPost('judul_galeri'), '-', TRUE);
        $data = [
            'judul_galeri' => esc($this->request->getPost('judul_galeri')),
            'deskripsi_galeri' => esc($this->request->getPost('deskripsi_galeri')),
            'link_galeri' => esc($this->request->getPost('link_galeri')),
            'gambar_galeri' => $namaGambar,
            'slug_galeri' => $slug,
        ];
        $this->GaleriModel->insert($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan !');
    }

    // UPDATE Method
    public function updateGaleri($id_galeri)
    {
        $gambar = $this->request->getFile('gambar_galeri');
        var_dump($gambar);
        $namaGambar = $gambar->getRandomName();
        $gambar->move(WRITEPATH . '../public/Assets/Images/', $namaGambar);

        // dd($_POST);
        $slug = url_title($this->request->getPost('judul_galeri'), '-', TRUE);
        $data = [
            'judul_galeri' => esc($this->request->getPost('judul_galeri')),
            'deskripsi_galeri' => esc($this->request->getPost('deskripsi_galeri')),
            'link_galeri' => esc($this->request->getPost('link_galeri')),
            'gambar_galeri' => $namaGambar,
            'slug_galeri' => $slug,
        ];
        $this->GaleriModel->update($id_galeri, $data);

        return redirect()->back()->with('success', 'Data berhasil diedit !');
    }

    // DELETE Method
    public function deleteGaleri($id_galeri)
    {
        $this->GaleriModel->where('id_galeri', $id_galeri)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus !');
    }
}
