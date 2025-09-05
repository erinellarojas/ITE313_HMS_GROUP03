<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'role_id'  => session()->get('role_id')
        ];

        return view('dashboard/index', $data);
    }
}
