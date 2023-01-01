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

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/brands/', $image_name);

        $brand->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'name' => $this->request->getPost('name'),
            'image' => $image_name,
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/brand'));
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
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/brands/', $image_name);

            $brand->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'image' => $image_name,
                'status' => $this->request->getPost('status')
            ]);
        } else {
            $brand->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'status' => $this->request->getPost('status')
            ]);
        }

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/brand'));
    }

    public function destroy($id)
    {
        $brand = new BrandModel();
        $brand->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/brand'));
    }
}