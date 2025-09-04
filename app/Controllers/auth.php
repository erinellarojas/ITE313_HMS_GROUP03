<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $session = session();
        $userModel = new UserModel();

        // Sanitize inputs
        $email = esc($this->request->getPost('email'));
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Set session
            $session->set([
                'user_id'    => $user['id'],
                'username'   => $user['username'],
                'role_id'    => $user['role_id'],
                'role'       => $user['role'] ?? 'user', // optional if you have role name
                'isLoggedIn' => true
            ]);

            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('error', 'Invalid email or password');
            return redirect()->back()->withInput(); // preserve input values
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
