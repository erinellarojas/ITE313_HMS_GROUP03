<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DoctorModel;

class DoctorsController extends BaseController
{
    protected $doctorModel;

    public function __construct()
    {
        $this->doctorModel = new DoctorModel();
    }

    public function index()
    {
        $data['doctors'] = $this->doctorModel->findAll();
        return view('doctors/index', $data);
    }

    public function create()
    {
        return view('doctors/create');
    }

    public function store()
    {
        $this->doctorModel->save([
            'name'           => $this->request->getPost('name'),
            'specialization' => $this->request->getPost('specialization'),
            'phone'          => $this->request->getPost('phone'),
            'email'          => $this->request->getPost('email'),
        ]);

        return redirect()->to('/doctors');
    }

    public function edit($id)
    {
        $data['doctor'] = $this->doctorModel->find($id);
        return view('doctors/edit', $data);
    }

    public function update($id)
    {
        $this->doctorModel->update($id, [
            'name'           => $this->request->getPost('name'),
            'specialization' => $this->request->getPost('specialization'),
            'phone'          => $this->request->getPost('phone'),
            'email'          => $this->request->getPost('email'),
        ]);

        return redirect()->to('/doctors');
    }

    public function delete($id)
    {
        $this->doctorModel->delete($id);
        return redirect()->to('/doctors');
    }
}
