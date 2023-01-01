<?php

namespace App\Controllers\Extranet;

use App\Models\ProductModel;
use App\Models\ProductCategoryModel;

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
        $product_category = new ProductCategoryModel();
        $data['product_categories'] = $product_category->where('status', 1)->get()->getResult();

        return view('extranet/product/create', $data);
    }

    public function store()
    {
        $product = new ProductModel();

        $image1 = $this->request->getFile('image1');
        $image_name1 = $image1->getRandomName();
        $image1->move('assets/images/products/', $image_name1);

        $image2 = $this->request->getFile('image2');
        if ($image2 != '') {
            $image_name2 = $image2->getRandomName();
            $image2->move('assets/images/products/', $image_name2);
        } else {
            $image_name2 = NULL;
        }

        $image3 = $this->request->getFile('image3');
        if ($image3 != '') {
            $image_name3 = $image3->getRandomName();
            $image3->move('assets/images/products/', $image_name3);
        } else {
            $image_name3 = NULL;
        }

        $product->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'product_category_id' => $this->request->getPost('product_category'),
            'sku' => $this->request->getPost('sku'),
            'name' => $this->request->getPost('name'),
            'rating' => $this->request->getPost('rating'),
            'short_description' => $this->request->getPost('short_description'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'qty' => $this->request->getPost('qty'),
            'discount' => $this->request->getPost('discount'),
            'tag' => $this->request->getPost('tag'),
            'image1' => $image_name1,
            'image2' => $image_name2,
            'image3' => $image_name3,
            'is_featured' => $this->request->getPost('is_featured'),
            'is_new_arrival' => $this->request->getPost('is_new_arrival'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/product'));
    }

    public function show($id)
    {
        $db = \Config\Database::connect();
        $data['product'] = $db->query("
        SELECT 
            product.id,
            product.sku,
            product.name as product_name,
            product.rating,
            product.short_description,
            product.description,
            product.price,
            product.qty,
            product.discount,
            product.tag,
            product.image1,
            product.image2,
            product.image3,
            product.is_featured,
            product.is_new_arrival,
            product.status,
            product_category.name as category_name,
            product_category.id as category_id
        FROM product JOIN product_category
        ON product.product_category_id = product_category.id
        WHERE product.id = '$id'
            AND product.status != 0
            AND product_category.status != 0
        ")->getFirstRow();

        return view('extranet/product/show', $data);
    }

    public function edit($id)
    {
        $product_category = new ProductCategoryModel();
        $data['product_categories'] = $product_category->where('status', 1)->get()->getResult();

        $db = \Config\Database::connect();
        $data['product'] = $db->query("
        SELECT 
            product.id,
            product.sku,
            product.name as product_name,
            product.rating,
            product.short_description,
            product.description,
            product.price,
            product.qty,
            product.discount,
            product.tag,
            product.image1,
            product.image2,
            product.image3,
            product.is_featured,
            product.is_new_arrival,
            product.status,
            product_category.name as category_name,
            product_category.id as category_id
        FROM product JOIN product_category
        ON product.product_category_id = product_category.id
        WHERE product.id = '$id'
            AND product.status != 0
            AND product_category.status != 0
        ")->getFirstRow();

        return view('extranet/product/edit', $data);
    }

    public function update($id)
    {
        $product = new ProductModel();

        $image1 = $this->request->getFile('image1');
        if ($image1 != '') {
            $image_name1 = $image1->getRandomName();
            $image1->move('assets/images/products/', $image_name1);

            $product->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'image1' => $image_name1
            ]);
        }

        $image2 = $this->request->getFile('image2');
        if ($image2 != '') {
            $image_name2 = $image2->getRandomName();
            $image2->move('assets/images/products/', $image_name2);

            $product->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'image2' => $image_name2
            ]);
        }

        $image3 = $this->request->getFile('image3');
        if ($image3 != '') {
            $image_name3 = $image3->getRandomName();
            $image3->move('assets/images/products/', $image_name3);

            $product->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'image3' => $image_name3
            ]);
        }

        $product->update($id, [
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'product_category_id' => $this->request->getPost('product_category'),
            'sku' => $this->request->getPost('sku'),
            'name' => $this->request->getPost('name'),
            'rating' => $this->request->getPost('rating'),
            'short_description' => $this->request->getPost('short_description'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'qty' => $this->request->getPost('qty'),
            'discount' => $this->request->getPost('discount'),
            'tag' => $this->request->getPost('tag'),
            'is_featured' => $this->request->getPost('is_featured'),
            'is_new_arrival' => $this->request->getPost('is_new_arrival'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/product'));
    }

    public function destroy($id)
    {
        $product = new ProductModel();
        $product->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/product'));
    }
}
