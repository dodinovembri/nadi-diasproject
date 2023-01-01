<?php

namespace App\Controllers\Frontend;
use App\Models\ConfigurationModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use App\Models\CartModel;

class Productcategorycontroller extends BaseController
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
        
        return view('frontend/category/index', $data);
    }

    public function show($id)
    {        
        $configuration = new ConfigurationModel();
        $social_media = new SocialMediaModel();
        $product_category = new ProductCategoryModel();
        $cart = new CartModel();

        $data['configuration'] = $configuration->get()->getFirstRow();
        $data['social_medias'] = $social_media->get()->getResult();
        $data['product_categories'] = $product_category->get()->getResult();
        $data['count_cart'] = $cart->where('user_id', session()->get('id'))->countAll();
        $product = new ProductModel();
        $data['products'] = $product->where('status', 1)->where('product_category_id', $id)->get()->getResult();

        $db = \Config\Database::connect();
        $data['products'] = $db->query("
        SELECT 
            product.id,
            product.name as product_name,
            product.rating,
            product.price,
            product.discount,
            product.image1,
            product.image2,
            product.image3,
            product_category.name as category_name,
            product_category.id as category_id
        FROM product JOIN product_category
        ON product.product_category_id = product_category.id
        WHERE product.product_category_id = '$id'
            AND product.status != 0
            AND product_category.status != 0
        ")->getResult();

        return view('frontend/category/show', $data);
    }
}
