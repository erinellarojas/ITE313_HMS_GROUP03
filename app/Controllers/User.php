<?php
namespace App\Controllers;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index() {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('users/index', $data);
    }

    public function add() {
        return view('users/add');
    }

    public function store() {
        $model = new UserModel();
        $model->save([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role_id' => $this->request->getPost('role_id')
        ]);
        return redirect()->to('/users');
    }

    public function edit($id) {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('users/edit', $data);
    }

    public function update($id) {
        $model = new UserModel();
        $model->update($id, [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role_id' => $this->request->getPost('role_id')
        ]);
        return redirect()->to('/users');
    }

    public function delete($id) {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/users');
    }
}
