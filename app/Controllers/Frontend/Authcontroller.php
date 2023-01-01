<?php

namespace App\Controllers\Frontend;
use App\Models\ConfigurationModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\UserModel;
use App\Models\CartModel;

class Authcontroller extends BaseController
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
        
        return view('frontend/auth/login', $data);
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $data = $model->where('email', $email)->where('role_code', 1)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],
                    'role_code' => $data['role_code'],
                    'address' => $data['address'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/'));
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('login'));
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
