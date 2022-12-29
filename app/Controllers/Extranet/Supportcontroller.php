<?php

namespace App\Controllers\Extranet;
use App\Models\SupportModel;

class Supportcontroller extends BaseController
{
    public function index()
    {
        $support = new SupportModel();
        $data['supports'] = $support->get()->getResult();

        return view('extranet/support/index', $data);
    }

    public function create()
    {
        return view('extranet/support/create');
    }

    public function store()
    {
        $support = new SupportModel();
        $support->insert([
            'created_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/support/index'));
    }    

    public function show($id)
    {
        $support = new SupportModel();
        $data['support'] = $support->where('id', $id)->get()->getFirstRow();

        return view('extranet/support/show', $data);
    }    

    public function edit($id)
    {
        $support = new SupportModel();
        $data['support'] = $support->where('id', $id)->get()->getFirstRow();

        return view('extranet/support/edit', $data);
    }   
    
    public function update($id)
    {
        $support = new SupportModel();
        $support->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/support/index'));
    }

    public function destroy($id)
    {
        $support = new SupportModel();
        $support->delete($id);
        return redirect()->to(base_url('extranet/support/index'));
    }
}
