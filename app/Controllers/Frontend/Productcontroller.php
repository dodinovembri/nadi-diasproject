<?php

namespace App\Controllers\Frontend;
use App\Models\ConfigurationModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\CartModel;

class Productcontroller extends BaseController
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
        WHERE product.status != 0
            AND product_category.status != 0
        ")->getResult();
        
        return view('frontend/product/index', $data);
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

        $db = \Config\Database::connect();
        $data['product'] = $db->query("
        SELECT 
            product.id,
            product.sku,
            product.name as product_name,
            product.rating,
            product.price,
            product.discount,
            product.tag,
            product.image1,
            product.image2,
            product.image3,
            product.description,
            product_category.name as category_name,
            product_category.id as category_id
        FROM product JOIN product_category
        ON product.product_category_id = product_category.id
        WHERE product.id = '$id'
            AND product.status != 0
            AND product_category.status != 0
        ")->getFirstRow();

        $data['related_products'] = $db->query("
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
        WHERE product.status != 0
            AND product_category.status != 0
        ")->getResult();
        
        return view('frontend/product/show', $data);
    }

    public function search()
    {
        $configuration = new ConfigurationModel();
        $social_media = new SocialMediaModel();
        $product_category = new ProductCategoryModel();
        $cart = new CartModel();

        $data['configuration'] = $configuration->get()->getFirstRow();
        $data['social_medias'] = $social_media->get()->getResult();
        $data['product_categories'] = $product_category->get()->getResult();
        $data['count_cart'] = $cart->where('user_id', session()->get('id'))->countAll();

        $q = $this->request->getVar('q');
        $cat = $this->request->getVar('cat');
        
        $db = \Config\Database::connect();
        if ($cat) {
            $data['products'] = $db->query("
            SELECT 
                product.id,
                product.sku,
                product.name as product_name,
                product.rating,
                product.price,
                product.discount,
                product.tag,
                product.image1,
                product.image2,
                product.image3,
                product.description,
                product_category.name as category_name,
                product_category.id as category_id
            FROM product JOIN product_category
            ON product.product_category_id = product_category.id
            WHERE product.name LIKE '%$q%'
                AND product_category.id = '$cat'
                AND product.status != 0
                AND product_category.status != 0
            ")->getResult();
        }else{
            $data['products'] = $db->query("
            SELECT 
                product.id,
                product.sku,
                product.name as product_name,
                product.rating,
                product.price,
                product.discount,
                product.tag,
                product.image1,
                product.image2,
                product.image3,
                product.description,
                product_category.name as category_name,
                product_category.id as category_id
            FROM product JOIN product_category
            ON product.product_category_id = product_category.id
            WHERE product.name LIKE '%$q%'
                AND product.status != 0
                AND product_category.status != 0
            ")->getResult();
        }

        return view('frontend/product/result', $data);
    }
}
