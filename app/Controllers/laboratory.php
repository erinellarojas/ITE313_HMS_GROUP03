<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaboratoryModel;

class LaboratoryController extends BaseController
{
    protected $labModel;

    public function __construct()
    {
        $this->labModel = new LaboratoryModel();
    }

    public function index()
    {
        $data['laboratory'] = $this->labModel->findAll();
        return view('laboratory/index', $data);
    }

    public function create()
    {
        return view('laboratory/create');
    }

    public function store()
    {
        $this->labModel->save([
            'patient_id' => $this->request->getPost('patient_id'),
            'test_name'  => $this->request->getPost('test_name'),
            'result'     => $this->request->getPost('result'),
            'status'     => $this->request->getPost('status'),
        ]);

        return redirect()->to('/laboratory');
    }

    public function edit($id)
    {
        $data['lab'] = $this->labModel->find($id);
        return view('laboratory/edit', $data);
    }

    public function update($id)
    {
        $this->labModel->update($id, [
            'patient_id' => $this->request->getPost('patient_id'),
            'test_name'  => $this->request->getPost('test_name'),
            'result'     => $this->request->getPost('result'),
            'status'     => $this->request->getPost('status'),
        ]);

        return redirect()->to('/laboratory');
    }

    public function delete($id)
    {
        $this->labModel->delete($id);
        return redirect()->to('/laboratory');
    }
}
