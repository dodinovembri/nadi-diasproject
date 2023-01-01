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

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/product_categories/', $image_name);

        $product_category->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'code' => $this->request->getPost('code'),
            'name' => $this->request->getPost('name'),
            'image' => $image_name,
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/product-category'));
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
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/product_categories/', $image_name);

            $product_category->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'code' => $this->request->getPost('code'),
                'name' => $this->request->getPost('name'),
                'image' => $image_name,
                'status' => $this->request->getPost('status')
            ]);
        } else {
            $product_category->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'code' => $this->request->getPost('code'),
                'name' => $this->request->getPost('name'),
                'status' => $this->request->getPost('status')
            ]);
        }

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/product-category'));
    }

    public function destroy($id)
    {
        $product_category = new ProductCategoryModel();
        $product_category->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/product-category'));
    }
}
