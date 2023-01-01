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
            'creator_id' => session()->get('id'),
            'icon' => $this->request->getPost('icon'),
            'name' => $this->request->getPost('name'),
            'text1' => $this->request->getPost('text1'),
            'text2' => $this->request->getPost('text2'),           
            'text3' => $this->request->getPost('text3'),           
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/support'));
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
            'modifier_id' => session()->get('id'),
            'icon' => $this->request->getPost('icon'),
            'name' => $this->request->getPost('name'),
            'text1' => $this->request->getPost('text1'),
            'text2' => $this->request->getPost('text2'),
            'text3' => $this->request->getPost('text3'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/support'));
    }

    public function destroy($id)
    {
        $support = new SupportModel();
        $support->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/support'));
    }
}
