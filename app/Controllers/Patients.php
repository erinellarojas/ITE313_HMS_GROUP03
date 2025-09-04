<?php

namespace App\Controllers;

use App\Models\PatientsModel;

class Patients extends BaseController
{
    protected $patientsModel;

    public function __construct()
    {
        $this->patientsModel = new PatientsModel();
    }

    // LIST ng patients
    public function index()
    {
        $data['patients'] = $this->patientsModel->findAll();
        return view('patients/index', $data);
    }

    // ADD patient form
    public function add()
    {
        return view('patients/add');
    }

    // SAVE patient
    public function store()
    {
        $this->patientsModel->save([
            'name'    => $this->request->getPost('name'),
            'age'     => $this->request->getPost('age'),
            'gender'  => $this->request->getPost('gender'),
            'contact' => $this->request->getPost('contact'),
        ]);

        return redirect()->to('/patients');
    }

    // EDIT patient form
    public function edit($id)
    {
        $data['patient'] = $this->patientsModel->find($id);
        return view('patients/edit', $data);
    }

    // UPDATE patient
    public function update($id)
    {
        $this->patientsModel->update($id, [
            'name'    => $this->request->getPost('name'),
            'age'     => $this->request->getPost('age'),
            'gender'  => $this->request->getPost('gender'),
            'contact' => $this->request->getPost('contact'),
        ]);

        return redirect()->to('/patients');
    }

    // DELETE patient
    public function delete($id)
    {
        $this->patientsModel->delete($id);
        return redirect()->to('/patients');
    }
}
