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
        $user->insert([
            'created_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/user/index'));
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
        $user->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/user/index'));
    }

    public function destroy($id)
    {
        $user = new UserModel();
        $user->delete($id);
        return redirect()->to(base_url('extranet/user/index'));
    }
}