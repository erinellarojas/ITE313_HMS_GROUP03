<?php

namespace App\Controllers;

use App\Models\AppointmentModel;
use CodeIgniter\Controller;

class AppointmentController extends Controller
{
    protected $appointmentModel;

    public function __construct()
    {
        $this->appointmentModel = new AppointmentModel();
    }

    // List all appointments
    public function index()
    {
        $data['appointments'] = $this->appointmentModel->findAll();
        return view('appointments/index', $data);
    }

    // Create a new appointment
    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $this->appointmentModel->save([
                'patient_id'       => $this->request->getPost('patient_id'),
                'doctor_id'        => $this->request->getPost('doctor_id'),
                'appointment_date' => $this->request->getPost('appointment_date'),
                'status'           => $this->request->getPost('status') ?? 'Pending',
            ]);

            return redirect()->to('/appointments');
        }

        return view('appointments/create'); // Show form
    }

    // Delete an appointment
    public function delete($id)
    {
        $this->appointmentModel->delete($id);
        return redirect()->to('/appointments');
    }
}
