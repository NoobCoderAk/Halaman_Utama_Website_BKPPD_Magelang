<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {

        $data = [
            'daftar_carousel' => $this->CarouselModel->FindAll(),
            'daftar_egov' => $this->EgovModel->FindAll(),
            'daftar_galeri' => $this->GaleriModel->FindAll(),
            'daftar_pengumuman' => $this->PengumumanModel->FindAll(),
            'daftar_artikel' => $this->ArtikelModel->FindAll(),
            'daftar_agenda' => $this->AgendaModel->FindAll(),
            'daftar_jadwal' => $this->JadwalModel->FindAll(),
            'daftar_maps' => $this->MapsModel->FindAll(),
        ];

        echo view('templates/header');
        echo view('pages/home', $data);
        echo view('templates/footer');
    }
    public function interaktif()
    {
        echo view('templates/header');
        echo view('pages/interaktif');
        echo view('templates/footer');
    }
}
