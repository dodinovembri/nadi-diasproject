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
        $cart_product = new CartModel();

        $data['configuration'] = $configuration->get()->getFirstRow();
        $data['social_medias'] = $social_media->get()->getResult();
        $data['product_categories'] = $product_category->get()->getResult();
        $data['cart_products'] = $cart_product->where('user_id', session()->get('id'))->get()->getResult();

        return view('frontend/cart/index', $data);
    }

    public function store($id)
    {
        if (session()->get('logged_in') == TRUE) {
            $cart = new CartModel();
            $cart->insert([
                'created_at' => date('Y-m-d H:i:s'),
                'user_id' => session()->get('id'),
                'product_id' => $id,
                'qty' => 1
            ]);
            return redirect()->to(base_url('/'));
        } else {
            session()->setFlashdata('loginrequired', true);
            // print_r(json_encode(session()->getFlashdata('loginrequired')));
            // die;
            return redirect()->to(base_url('/'));
        }
    }
}
