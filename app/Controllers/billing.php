<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BillingModel;

class BillingController extends BaseController
{
    protected $billingModel;

    public function __construct()
    {
        $this->billingModel = new BillingModel();
    }

    public function index()
    {
        $data['billing'] = $this->billingModel->findAll();
        return view('billing/index', $data);
    }

    public function create()
    {
        return view('billing/create');
    }

    public function store()
    {
        $this->billingModel->save([
            'patient_id' => $this->request->getPost('patient_id'),
            'amount'     => $this->request->getPost('amount'),
            'status'     => $this->request->getPost('status'),
        ]);

        return redirect()->to('/billing');
    }

    public function edit($id)
    {
        $data['bill'] = $this->billingModel->find($id);
        return view('billing/edit', $data);
    }

    public function update($id)
    {
        $this->billingModel->update($id, [
            'patient_id' => $this->request->getPost('patient_id'),
            'amount'     => $this->request->getPost('amount'),
            'status'     => $this->request->getPost('status'),
        ]);

        return redirect()->to('/billing');
    }

    public function delete($id)
    {
        $this->billingModel->delete($id);
        return redirect()->to('/billing');
    }
}
