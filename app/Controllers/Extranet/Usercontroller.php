<?php

namespace App\Controllers\Extranet;
use App\Models\UserModel;

class Usercontroller extends BaseController
{
    public function index()
    {
        $user = new UserModel();
        $data['users'] = $user->get()->getResult();

        return view('extranet/user/index', $data);
    }

    public function create()
    {
        return view('extranet/user/create');
    }

    public function store()
    {
        $user = new UserModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/users/', $image_name);

        $user->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('email'), PASSWORD_DEFAULT),
            'role_code' => $this->request->getPost('role_code'),
            'image' => $image_name,
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/user'));
    }

    public function show($id)
    {
        $user = new UserModel();
        $data['user'] = $user->where('id', $id)->get()->getFirstRow();

        return view('extranet/user/show', $data);
    }

    public function edit($id)
    {
        $user = new UserModel();
        $data['user'] = $user->where('id', $id)->get()->getFirstRow();

        return view('extranet/user/edit', $data);
    }

    public function update($id)
    {
        $user = new UserModel();
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/users/', $image_name);

            $user->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'role_code' => $this->request->getPost('role_code'),
                'image' => $image_name,
                'status' => $this->request->getPost('status')
            ]);
        } else {
            $user->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'role_code' => $this->request->getPost('role_code'),
                'status' => $this->request->getPost('status')
            ]);
        }

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/user'));
    }

    public function destroy($id)
    {
        $user = new UserModel();
        $user->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/user'));
    }
}
