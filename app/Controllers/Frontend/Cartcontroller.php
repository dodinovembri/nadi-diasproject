<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigurationModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\CartModel;

class Cartcontroller extends BaseController
{
    public function index()
    {
        $configuration = new ConfigurationModel();
        $social_media = new SocialMediaModel();
        $product_category = new ProductCategoryModel();
        $cart = new CartModel();

        $data['configuration'] = $configuration->get()->getFirstRow();
        $data['social_medias'] = $social_media->get()->getResult();
        $data['product_categories'] = $product_category->get()->getResult();
        $data['count_cart'] = $cart->where('user_id', session()->get('id'))->countAll();

        $db = \Config\Database::connect();
        $data['cart_products'] = $db->query("
        SELECT 
            cart.id,
            cart.qty as cart_qty,
            product.id as product_id,
            product.name as product_name,
            product.price,
            product.qty as product_qty,
            product.discount,
            product.image1
        FROM cart JOIN product
        ON cart.product_id = product.id
        WHERE cart.status != 0
            AND product.status != 0
        ")->getResult();

        return view('frontend/cart/index', $data);
    }

    public function store($id, $category_id = null, $product_list = null, $product_detail = null)
    {
        $cart = new CartModel();
        $product = $cart->where('product_id', $id)->where('user_id', session()->get('id'))->first();
        if ($product) {
            $cart->update($product['id'], [
                'modified_at' => date('Y-m-d H:i:s'),
                'qty' => $product['qty'] + 1
            ]);
        } else {
            $cart->insert([
                'created_at' => date('Y-m-d H:i:s'),
                'user_id' => session()->get('id'),
                'product_id' => $id,
                'qty' => 1
            ]);
        }

        if ($product_list == "1") {
            return redirect()->to(base_url('product'));
        }elseif ($product_detail == "1") {
            return redirect()->to(base_url('product/' . $id));
        } elseif ($category_id != "0") {
            return redirect()->to(base_url('category/' . $category_id));
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function destroy($id)
    {
        $cart = new CartModel();
        $cart->delete($id);

        return redirect()->to(base_url('cart'));
    }

    public function update()
    {
        $product_ids = $this->request->getPost('id');
        $quantities = $this->request->getPost('qty');
        $cart = new CartModel();
        foreach ($product_ids as $key => $value) {
            $product = $cart->where('id', $value)->where('user_id', session()->get('id'))->first();
            $cart->update($value, [
                'modified_at' => date('Y-m-d H:i:s'),
                'qty' => $quantities[$key]
            ]);
        }

        return redirect()->to(base_url('cart'));
    }
}
