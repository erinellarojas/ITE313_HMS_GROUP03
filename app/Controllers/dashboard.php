<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'role'  => session()->get('role') // kunin ang role ng naka-login
        ];

        return view('dashboard/index', $data);
    }
}
