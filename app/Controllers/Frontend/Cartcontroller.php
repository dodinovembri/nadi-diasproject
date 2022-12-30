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
        
        $data['configuration'] = $configuration->get()->getFirstRow();
        $data['social_medias'] = $social_media->get()->getResult();
        $data['product_categories'] = $product_category->get()->getResult();
        
        return view('frontend/cart/index', $data);
    }

    public function store($id)
    {
        $cart = new CartModel();
        $cart->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'user_id' => session()->get('id'),
            'product_id' => $id,
            'qty' => 1
        ]);
        return redirect()->to(base_url('/'));        
    }
}
