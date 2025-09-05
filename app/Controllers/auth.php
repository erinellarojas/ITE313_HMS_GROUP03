<?php
namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // Load the login view
        return view('auth.php/login');
    }

    public function register()
    {
        helper('form');  // Load form helper for set_value() function

        $roleModel = new \App\Models\RoleModel();
        $roles = $roleModel->findAll();

        return view('auth.php/register', ['roles' => $roles]);
    }

    public function attemptRegister()
    {
        $session = session();
        $model = new \App\Models\UserModel();

        $rules = [
            'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'pass_confirm' => 'matches[password]',
            'role_id' => 'required|integer'
        ];

        if (!$this->validate($rules)) {
            $session->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role_id' => $this->request->getPost('role_id')
        ];

        $model->save($data);

        $session->setFlashdata('success', 'Registration successful. You can now login.');
        return redirect()->to('/login');
    }

    public function attemptLogin()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $selectedRole = $this->request->getPost('role');

        $user = $model->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                if ($user['role_id'] == $selectedRole) {
                    $sessionData = [
                        'user_id' => $user['id'],
                        'username' => $user['username'],
                        'role_id' => $user['role_id'],
                        'isLoggedIn' => true,
                    ];
                    $session->set($sessionData);
                    return redirect()->to('/dashboard');
                } else {
                    $session->setFlashdata('error', 'Selected role does not match your assigned role.');
                    return redirect()->to('/login');
                }
            } else {
                $session->setFlashdata('error', 'Invalid password.');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'User not found.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
