<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class KategoriController extends BaseController
{

    // Get Method
    public function index()
    {
        $data = [
            'title' => 'Kategori Content-Dashboard',
            'daftar_kategori' => $this->KategoriModel->FindAll(),
        ];
        return view('admin/pages/kategori', $data);
    }
    public function beritaView()
    {
        $data = [
            'title' => 'Berita-Dashboard'
        ];
        return view('admin/pages/berita', $data);
    }
    public function agendaView()
    {
        $data = [
            'title' => 'Agenda-Dashboard'
        ];
        return view('admin/pages/agenda', $data);
    }
    public function jadwalView()
    {
        $data = [
            'title' => 'Jadwal-Dashboard'
        ];
        return view('admin/pages/jadwal', $data);
    }
    public function mapView()
    {
        $data = [
            'title' => 'Maps-Dashboard'
        ];
        return view('admin/pages/map', $data);
    }
    public function surveiView()
    {
        $data = [
            'title' => 'Survei Kepuasan-Dashboard'
        ];
        return view('admin/pages/survei', $data);
    }


    // POST Method
    public function storeKategori()
    {
        // dd($_POST);
        // get slug
        $slug = url_title($this->request->getPost('nama_kategori'), '-', TRUE);
        $data = [
            'nama_kategori' => esc($this->request->getPost('nama_kategori')),
            'slug_kategori' => $slug,
        ];
        $this->KategoriModel->insert($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan !');
    }


    // UPDATE Method
    public function updateKategori($id_kategori)
    {
        // dd($_POST);
        // get slug
        $slugText = $this->request->getPost('nama_kategori');
        $slug = url_title($slugText, '-', TRUE);
        $data = [
            'nama_kategori' => esc($this->request->getPost('nama_kategori')),
            'slug_kategori' => $slug,
        ];
        $this->KategoriModel->update($id_kategori, $data);

        return redirect()->back()->with('success', 'Data berhasil diedit !');
    }



    // DELETE Method
    public function deleteKategori($id_kategori)
    {
        $this->KategoriModel->where('id_kategori', $id_kategori)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus !');
    }
}
