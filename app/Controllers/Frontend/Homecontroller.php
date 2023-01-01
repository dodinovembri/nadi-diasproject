<?php

namespace App\Controllers\Frontend;

use App\Models\CartModel;
use App\Models\ConfigurationModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;

class Homecontroller extends BaseController
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
        $data['guarantee'] = $db->table('guarantee')->get()->getResult();
        $data['sliders'] = $db->table('slider')->get()->getResult();
        $data['promotions'] = $db->table('promotion')->get()->getResult();

        $data['featured_products'] = $db->query('
            SELECT 
                product.id,
                product.name as product_name,
                product.rating,
                product.price,
                product.discount,
                product.image1,
                product.image2,
                product.image3,
                product_category.name as category_name
            FROM product JOIN product_category
            ON product.product_category_id = product_category.id
            WHERE product.status != 0
                AND product.is_featured = 1
        ')->getResult();

        $data['new_arrival_products'] = $db->query('
            SELECT 
                product.id,
                product.name as product_name,
                product.rating,
                product.price,
                product.discount,
                product.image1,
                product.image2,
                product.image3,
                product_category.name as category_name
            FROM product JOIN product_category
            ON product.product_category_id = product_category.id
            WHERE product.status != 0
                AND product.is_new_arrival = 1
        ')->getResult();
        
        $data['banner'] = $db->table('banner')->get()->getFirstRow();
        $data['supports'] = $db->table('support')->get()->getResult();
        $data['exclusive'] = $db->table('exclusive')->get()->getFirstRow();
        $data['brands'] = $db->table('brand')->get()->getResult();
        $data['blogs'] = $db->table('blog')->get()->getResult();
        $data['best_selling_products'] = $db->table('product')->where('product.status', 1)->get()->getResult();
        $data['top_rated_products'] = $db->table('product')->where('product.status', 1)->get()->getResult();

        return view('frontend/home/index', $data);
    }
}
