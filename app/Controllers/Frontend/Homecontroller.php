<?php

namespace App\Controllers\Frontend;

class Homecontroller extends BaseController
{
    public function __construct() {        
        $db = \Config\Database::connect();
        $this->configuration = $db->table('configuration')->get()->getFirstRow();
        $this->social_media = $db->table('social_media')->get()->getResult();
        $this->category = $db->table('category')->get()->getResult();
    }

    public function index()
    {
        $data['configuration'] = $this->configuration;
        $data['social_media'] = $this->social_media;
        $data['categories'] = $this->category;

        $db = \Config\Database::connect();
        $data['guarantee'] = $db->table('guarantee')->get()->getResult();
        $data['sliders'] = $db->table('slider')->get()->getResult();
        $data['promotions'] = $db->table('promotion')->get()->getResult();
        $data['featured_products'] = $db->table('product')->where('product.is_featured', 1)->where('product.status', 1)->join('category', 'category.id = product.category_id')->get()->getResult();
        $data['new_arrival_products'] = $db->table('product')->where('product.is_new_arrival', 1)->where('product.status', 1)->join('category', 'category.id = product.category_id')->get()->getResult();
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
