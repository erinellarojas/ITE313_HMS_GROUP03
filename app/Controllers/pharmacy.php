<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PharmacyModel;

class PharmacyController extends BaseController
{
    protected $pharmacyModel;

    public function __construct()
    {
        $this->pharmacyModel = new PharmacyModel();
    }

    public function index()
    {
        $data['pharmacy'] = $this->pharmacyModel->findAll();
        return view('pharmacy/index', $data);
    }

    public function create()
    {
        return view('pharmacy/create');
    }

    public function store()
    {
        $this->pharmacyModel->save([
            'patient_id'    => $this->request->getPost('patient_id'),
            'medicine_name' => $this->request->getPost('medicine_name'),
            'quantity'      => $this->request->getPost('quantity'),
            'status'        => $this->request->getPost('status'),
        ]);

        return redirect()->to('/pharmacy');
    }

    public function edit($id)
    {
        $data['pharmacy'] = $this->pharmacyModel->find($id);
        return view('pharmacy/edit', $data);
    }

    public function update($id)
    {
        $this->pharmacyModel->update($id, [
            'patient_id'    => $this->request->getPost('patient_id'),
            'medicine_name' => $this->request->getPost('medicine_name'),
            'quantity'      => $this->request->getPost('quantity'),
            'status'        => $this->request->getPost('status'),
        ]);

        return redirect()->to('/pharmacy');
    }

    public function delete($id)
    {
        $this->pharmacyModel->delete($id);
        return redirect()->to('/pharmacy');
    }
}
