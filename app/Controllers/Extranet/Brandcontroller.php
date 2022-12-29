<?php

namespace App\Controllers\Extranet;
use App\Models\BrandModel;

class Brandcontroller extends BaseController
{
    public function index()
    {
        $brand = new BrandModel();
        $data['brands'] = $brand->get()->getResult();

        return view('extranet/brand/index', $data);
    }

    public function create()
    {
        return view('extranet/brand/create');
    }

    public function store()
    {
        $brand = new BrandModel();
        $brand->insert([
            'created_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/brand/index'));
    }    

    public function show($id)
    {
        $brand = new BrandModel();
        $data['brand'] = $brand->where('id', $id)->get()->getFirstRow();

        return view('extranet/brand/show', $data);
    }    

    public function edit($id)
    {
        $brand = new BrandModel();
        $data['brand'] = $brand->where('id', $id)->get()->getFirstRow();

        return view('extranet/brand/edit', $data);
    }   
    
    public function update($id)
    {
        $brand = new BrandModel();
        $brand->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/brand/index'));
    }

    public function destroy($id)
    {
        $brand = new BrandModel();
        $brand->delete($id);
        return redirect()->to(base_url('extranet/brand/index'));
    }
}