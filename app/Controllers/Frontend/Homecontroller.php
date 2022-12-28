<?php

namespace App\Controllers\Frontend;
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

        $data['configuration'] = $configuration->get()->getFirstRow();
        $data['social_medias'] = $social_media->get()->getResult();
        $data['product_categories'] = $product_category->get()->getResult();        

        $db = \Config\Database::connect();
        $data['guarantee'] = $db->table('guarantee')->get()->getResult();
        $data['sliders'] = $db->table('slider')->get()->getResult();
        $data['promotions'] = $db->table('promotion')->get()->getResult();
        $data['featured_products'] = $db->table('product')->where('product.is_featured', 1)->where('product.status', 1)->join('product_category', 'product_category.id = product.category_id')->get()->getResult();
        $data['new_arrival_products'] = $db->table('product')->where('product.is_new_arrival', 1)->where('product.status', 1)->join('product_category', 'product_category.id = product.category_id')->get()->getResult();
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
