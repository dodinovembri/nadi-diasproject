<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigurationModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\CartModel;
use App\Models\OrderModel;
use App\Models\OrderDetailModel;
use App\Models\ProductModel;
use App\Models\UserModel;

class Checkoutcontroller extends BaseController
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
            product.discount,
            product.image1
        FROM cart JOIN product
        ON cart.product_id = product.id
        WHERE cart.status != 0
            AND product.status != 0
        ")->getResult();

        $account_model = new UserModel();
        $data['account'] = $account_model->where('id', session()->get('id'))->get()->getFirstRow();

        $user = new UserModel();
        $data_user = $user->where('id', session()->get('id'))->get()->getFirstRow();
        if ($data_user->address == null) {
            return redirect()->to(base_url('account'));
        } else {
            return view('frontend/checkout/index', $data);
        }
    }

    public function store()
    {
        $user_id = session()->get('id');
        $db = \Config\Database::connect();

        $cart_products = $db->query("
        SELECT 
            cart.id,
            cart.qty as cart_qty,
            product.id as product_id,
            product.name as product_name,
            product.price,
            product.discount,
            product.image1
        FROM cart JOIN product
        ON cart.product_id = product.id
        WHERE cart.user_id = '$user_id'
            AND cart.status != 0
            AND product.status != 0
        ")->getResult();

        $order = new OrderModel();
        $random_number = rand();
        $order_number = "ORD" . "$random_number";

        $order->insert([
            'creator_id' => $user_id,
            'created_at' => date('Y-m-d H:i:s'),
            'user_id' => $user_id,
            'order_number' => $order_number
        ]);

        $getorder = $order->where('user_id', $user_id)->where('order_number', $order_number)->get()->getFirstRow();

        $order_detail = new OrderDetailModel();
        $total = 0;
        foreach ($cart_products as $key => $value) {
            $total_per_product = ($value->price -  $value->discount / 100 * $value->price) * $value->cart_qty;
            $total_discount_per_product = $value->price * $value->cart_qty - $total_per_product;
            $order_detail->insert([
                'created_at' => date('Y-m-d H:i:s'),
                'order_id' => $getorder->id,
                'product_id' => $value->product_id,
                'qty' => $value->cart_qty,
                'price' => $value->price,
                'discount' => $value->discount,
                'total_price' => $total_per_product,
                'total_discount' => $total_discount_per_product
            ]);

            $total = $total + $total_per_product;
        }

        $order->update($getorder->id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => $user_id,
            'total' => $total
        ]);

        // update stock
        $product = new ProductModel();
        foreach ($cart_products as $key => $value) {
            $data_product = $product->where('id', $value->product_id)->get()->getFirstRow();
            $product->update($value->product_id, [
                'qty' => $data_product->qty - $value->cart_qty
            ]);
        }

        // remove 
        $delete = new CartModel();
        foreach ($cart_products as $key => $value) {
            $delete->delete($value->id);
        }

        session()->set('order_number', $order_number);
        return redirect()->to(base_url('order/confirmation'));
    }
}
