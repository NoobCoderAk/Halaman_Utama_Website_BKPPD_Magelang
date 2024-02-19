<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CarouselController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Carousel Menu',
            // >>> ini untuk mengurutkan dari yang terbaru  >>>>> 'daftar_carousel' => $this->CarouselModel->orderBy('id_carousel', 'DESC')->FindAll(),
            'daftar_carousel' => $this->CarouselModel->FindAll(),
            // 'daftar_kategori' => $this->KategoriModel->FindAll(),
        ];
        return view('admin/pages/carousel', $data);
    }

    // POST Method
    public function storeCarousel()
    {
        $gambar = $this->request->getFile('gambar_carousel');
        // dd($gambar);
        // // return $gambar;
        $namaGambar = $gambar->getRandomName();
        $gambar->move(WRITEPATH . '../public/Assets/Images/', $namaGambar);
        // $filepath->move(WRITEPATH . '../public/Assets/Images/', $gambar);

        // dd($_POST);
        $slug = url_title($this->request->getPost('judul_carousel'), '-', TRUE);
        $data = [
            'judul_carousel' => esc($this->request->getPost('judul_carousel')),
            'deskripsi_carousel' => esc($this->request->getPost('deskripsi_carousel')),
            'gambar_carousel' => $namaGambar,
            'slug_carousel' => $slug,
        ];
        $this->CarouselModel->insert($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan !');
    }

    // UPDATE Method
    public function updateCarousel($id_carousel)
    {
        $gambar = $this->request->getFile('gambar_carousel');
        // dd($gambar);
        // // return $gambar;
        $namaGambar = $gambar->getRandomName();
        $gambar->move(WRITEPATH . '../public/Assets/Images/', $namaGambar);
        // $filepath->move(WRITEPATH . '../public/Assets/Images/', $gambar);

        // dd($_POST);
        $slug = url_title($this->request->getPost('judul_carousel'), '-', TRUE);
        $data = [
            'judul_carousel' => esc($this->request->getPost('judul_carousel')),
            'deskripsi_carousel' => esc($this->request->getPost('deskripsi_carousel')),
            'gambar_carousel' => $namaGambar,
            'slug_carousel' => $slug,
        ];
        $this->CarouselModel->update($id_carousel, $data);

        return redirect()->back()->with('success', 'Data berhasil diedit !');
    }

    // DELETE Method
    public function deleteCarousel($id_carousel)
    {
        $this->CarouselModel->where('id_carousel', $id_carousel)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus !');
    }
}
