<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NurseModel;

class NursesController extends BaseController
{
    protected $nurseModel;

    public function __construct()
    {
        $this->nurseModel = new NurseModel();
    }

    public function index()
    {
        $data['nurses'] = $this->nurseModel->findAll();
        return view('nurses/index', $data);
    }

    public function create()
    {
        return view('nurses/create');
    }

    public function store()
    {
        $this->nurseModel->save([
            'name'       => $this->request->getPost('name'),
            'department' => $this->request->getPost('department'),
            'phone'      => $this->request->getPost('phone'),
            'email'      => $this->request->getPost('email'),
        ]);

        return redirect()->to('/nurses');
    }

    public function edit($id)
    {
        $data['nurse'] = $this->nurseModel->find($id);
        return view('nurses/edit', $data);
    }

    public function update($id)
    {
        $this->nurseModel->update($id, [
            'name'       => $this->request->getPost('name'),
            'department' => $this->request->getPost('department'),
            'phone'      => $this->request->getPost('phone'),
            'email'      => $this->request->getPost('email'),
        ]);

        return redirect()->to('/nurses');
    }

    public function delete($id)
    {
        $this->nurseModel->delete($id);
        return redirect()->to('/nurses');
    }
}
