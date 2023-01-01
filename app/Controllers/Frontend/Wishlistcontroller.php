<?php

namespace App\Controllers\Frontend;
use App\Models\ConfigurationModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\CartModel;

class Wishlistcontroller extends BaseController
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
        
        return view('frontend/wishlist/index', $data);
    }
}
