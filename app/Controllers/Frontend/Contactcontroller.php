<?php

namespace App\Controllers\Frontend;
use App\Models\ConfigurationModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\CartModel;
use App\Models\ContactModel;
use App\Models\FaqModel;

class Contactcontroller extends BaseController
{
    public function index()
    {
        $configuration = new ConfigurationModel();
        $social_media = new SocialMediaModel();
        $product_category = new ProductCategoryModel();
        $cart = new CartModel();
        $contact = new ContactModel();
        $faq = new FaqModel();

        $data['configuration'] = $configuration->get()->getFirstRow();
        $data['social_medias'] = $social_media->get()->getResult();
        $data['product_categories'] = $product_category->get()->getResult();
        $data['count_cart'] = $cart->where('user_id', session()->get('id'))->countAll();
        $data['contact'] = $contact->get()->getFirstRow();
        $data['faqs'] = $faq->orderBy('created_at', 'ASC')->get()->getResult();
        
        return view('frontend/contact/index', $data);
    }
}
