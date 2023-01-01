<?php

namespace App\Controllers\Frontend;
use App\Models\ConfigurationModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\CartModel;
use App\Models\OrderModel;
use App\Models\UserModel;

class Ordercontroller extends BaseController
{
    public function confirmation()
    {
        $configuration = new ConfigurationModel();
        $social_media = new SocialMediaModel();
        $product_category = new ProductCategoryModel();
        $cart = new CartModel();

        $data['configuration'] = $configuration->get()->getFirstRow();
        $data['social_medias'] = $social_media->get()->getResult();
        $data['product_categories'] = $product_category->get()->getResult();
        $data['count_cart'] = $cart->where('user_id', session()->get('id'))->countAll();
        
        $order = new OrderModel();
        $db = \Config\Database::connect();
        $order_number = session()->get('order_number');
        $user_id = session()->get('id');
        $data['order'] = $order->where('order_number', $order_number)->where('user_id', $user_id)->get()->getFirstRow();
        $data['orders'] = $db->query("
        SELECT 
            order.id,
            order.order_number,
            order.total,            
            order_detail.qty as order_qty,
            order_detail.price,
            order_detail.total_price,
            order_detail.total_discount,
            product.id as product_id,
            product.name as product_name
        FROM `order` JOIN order_detail
        ON `order`.id = order_detail.order_id
        JOIN product ON order_detail.product_id = product.id
        WHERE `order`.order_number = '$order_number'
            AND `order`.status != 0
            AND order_detail.status != 0
        ")->getResult();

        // account
        $account_model = new UserModel();
        $data['account'] = $account_model->where('id', session()->get('id'))->get()->getFirstRow();

        return view('frontend/order/confirmation', $data);
    }
}
