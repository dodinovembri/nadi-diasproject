<?php

namespace App\Controllers\Frontend;

use App\Filters\UserAuth;
use App\Models\ConfigurationModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\CartModel;
use App\Models\OrderModel;
use App\Models\UserModel;

class Accountcontroller extends BaseController
{
    public function index()
    {
        // default
        $configuration = new ConfigurationModel();
        $social_media = new SocialMediaModel();
        $product_category = new ProductCategoryModel();
        $cart = new CartModel();
        $data['configuration'] = $configuration->get()->getFirstRow();
        $data['social_medias'] = $social_media->get()->getResult();
        $data['product_categories'] = $product_category->get()->getResult();
        $data['count_cart'] = $cart->where('user_id', session()->get('id'))->countAll();

        // account
        $account_model = new UserModel();
        $data['account'] = $account_model->where('id', session()->get('id'))->get()->getFirstRow();

        // orders
        $order_model = new OrderModel();
        $data['orders'] = $order_model->where('user_id', session()->get('id'))->get()->getResult();        

        return view('frontend/account/index', $data);
    }

    public function update($id)
    {
        $account = new UserModel();
        $account->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => session()->get('id'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'address' => $this->request->getPost('address')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('account'));
    }
}
