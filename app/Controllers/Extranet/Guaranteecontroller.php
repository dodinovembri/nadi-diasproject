<?php

namespace App\Controllers\Extranet;
use App\Models\GuaranteeModel;

class Guaranteecontroller extends BaseController
{
    public function index()
    {
        $guarantee = new GuaranteeModel();
        $data['guarantees'] = $guarantee->get()->getResult();

        return view('extranet/guarantee/index', $data);
    }

    public function create()
    {
        return view('extranet/guarantee/create');
    }

    public function store()
    {
        $guarantee = new GuaranteeModel();
        $guarantee->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'icon' => $this->request->getPost('icon'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/guarantee'));
    }    

    public function show($id)
    {
        $guarantee = new GuaranteeModel();
        $data['guarantee'] = $guarantee->where('id', $id)->get()->getFirstRow();

        return view('extranet/guarantee/show', $data);
    }    

    public function edit($id)
    {
        $guarantee = new GuaranteeModel();
        $data['guarantee'] = $guarantee->where('id', $id)->get()->getFirstRow();

        return view('extranet/guarantee/edit', $data);
    }   
    
    public function update($id)
    {
        $guarantee = new GuaranteeModel();
        $guarantee->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'icon' => $this->request->getPost('icon'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/guarantee'));
    }

    public function destroy($id)
    {
        $guarantee = new GuaranteeModel();
        $guarantee->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/guarantee'));
    }
}
