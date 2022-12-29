<?php

namespace App\Controllers\Extranet;
use App\Models\ProductCategoryModel;

class Productcategorycontroller extends BaseController
{
    public function index()
    {
        $product_category = new ProductCategoryModel();
        $data['product_categories'] = $product_category->get()->getResult();

        return view('extranet/product_category/index', $data);
    }

    public function create()
    {
        return view('extranet/product_category/create');
    }

    public function store()
    {
        $product_category = new ProductCategoryModel();
        $product_category->insert([
            'created_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/product_category/index'));
    }    

    public function show($id)
    {
        $product_category = new ProductCategoryModel();
        $data['product_category'] = $product_category->where('id', $id)->get()->getFirstRow();

        return view('extranet/product_category/show', $data);
    }    

    public function edit($id)
    {
        $product_category = new ProductCategoryModel();
        $data['product_category'] = $product_category->where('id', $id)->get()->getFirstRow();

        return view('extranet/product_category/edit', $data);
    }   
    
    public function update($id)
    {
        $product_category = new ProductCategoryModel();
        $product_category->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/product_category/index'));
    }

    public function destroy($id)
    {
        $product_category = new ProductCategoryModel();
        $product_category->delete($id);
        return redirect()->to(base_url('extranet/product_category/index'));
    }
}