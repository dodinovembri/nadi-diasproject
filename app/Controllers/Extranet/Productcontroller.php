<?php

namespace App\Controllers\Extranet;
use App\Models\ProductModel;

class Productcontroller extends BaseController
{
    public function index()
    {
        $product = new ProductModel();
        $data['products'] = $product->get()->getResult();

        return view('extranet/product/index', $data);
    }

    public function create()
    {
        return view('extranet/product/create');
    }

    public function store()
    {
        $product = new ProductModel();
        $product->insert([
            'created_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/product/index'));
    }    

    public function show($id)
    {
        $product = new ProductModel();
        $data['product'] = $product->where('id', $id)->get()->getFirstRow();

        return view('extranet/product/show', $data);
    }    

    public function edit($id)
    {
        $product = new ProductModel();
        $data['product'] = $product->where('id', $id)->get()->getFirstRow();

        return view('extranet/product/edit', $data);
    }   
    
    public function update($id)
    {
        $product = new ProductModel();
        $product->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/product/index'));
    }

    public function destroy($id)
    {
        $product = new ProductModel();
        $product->delete($id);
        return redirect()->to(base_url('extranet/product/index'));
    }
}