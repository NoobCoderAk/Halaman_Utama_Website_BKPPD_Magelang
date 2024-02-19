<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/pages/dashboard_admin', $data);
    }

    public function viewLogin()
    {
        return view('admin/login');
    }
}
