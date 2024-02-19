<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class EgovController extends BaseController
{
    public function index()
    {
        // Set title and connect model, database
        $data = [
            'title' => 'E-Goverment Menu',
            // >>> ini untuk mengurutkan dari yang terbaru  >>>>> 'daftar_carousel' => $this->CarouselModel->orderBy('id_carousel', 'DESC')->FindAll(),
            'daftar_egov' => $this->EgovModel->FindAll(),
            // 'daftar_kategori' => $this->KategoriModel->FindAll(),
        ];
        return view('admin/pages/egov', $data);
    }

    // POST Method
    public function storeEgov()
    {
        $gambar = $this->request->getFile('gambar_egov');
        $namaGambar = $gambar->getRandomName();
        $gambar->move(WRITEPATH . '../public/Assets/Images/', $namaGambar);

        $slug = url_title($this->request->getPost('judul_egov'), '-', TRUE);
        $data = [
            'judul_egov' => esc($this->request->getPost('judul_egov')),
            'deskripsi_egov' => esc($this->request->getPost('deskripsi_egov')),
            'link_egov' => esc($this->request->getPost('link_egov')),
            'gambar_egov' => $namaGambar,
            'slug_egov' => $slug,
        ];
        $this->EgovModel->insert($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan !');
    }

    // UPDATE Method
    public function updateEgov($id_egov)
    {
        $gambar = $this->request->getFile('gambar_egov');
        var_dump($gambar);
        $namaGambar = $gambar->getRandomName();
        $gambar->move(WRITEPATH . '../public/Assets/Images/', $namaGambar);
        // $filepath->move(WRITEPATH . '../public/Assets/Images/', $gambar);

        // dd($_POST);
        $slug = url_title($this->request->getPost('judul_egov'), '-', TRUE);
        $data = [
            'judul_egov' => esc($this->request->getPost('judul_egov')),
            'deskripsi_egov' => esc($this->request->getPost('deskripsi_egov')),
            'link_egov' => esc($this->request->getPost('link_egov')),
            'gambar_egov' => $namaGambar,
            'slug_egov' => $slug,
        ];
        $this->EgovModel->update($id_egov, $data);

        return redirect()->back()->with('success', 'Data berhasil diedit !');
    }

    // DELETE Method
    public function deleteEgov($id_egov)
    {
        $this->EgovModel->where('id_egov', $id_egov)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus !');
    }
}
