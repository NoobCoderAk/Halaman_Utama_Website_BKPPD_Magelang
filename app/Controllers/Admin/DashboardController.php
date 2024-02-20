<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'daftar_carousel' => $this->CarouselModel->FindAll(),
            'daftar_egov' => $this->EgovModel->FindAll(),
            'daftar_galeri' => $this->GaleriModel->FindAll(),
            'daftar_pengumuman' => $this->PengumumanModel->FindAll(),
            'daftar_artikel' => $this->ArtikelModel->FindAll(),
            'daftar_agenda' => $this->AgendaModel->FindAll(),
            'daftar_jadwal' => $this->JadwalModel->FindAll(),
            'daftar_maps' => $this->MapsModel->FindAll(),
        ];
        return view('admin/pages/dashboard_admin', $data);
    }

    public function viewLogin()
    {
        return view('admin/login');
    }
}
