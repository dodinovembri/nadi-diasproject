<?php

namespace App\Controllers\Frontend;

class Wishlistcontroller extends BaseController
{
    public function __construct() {        
        $db = \Config\Database::connect();
        $this->configuration = $db->table('configuration')->get()->getFirstRow();
        $this->social_media = $db->table('social_media')->get();
        $this->category = $db->table('category')->get();
    }

    public function index()
    {
        $data['configuration'] = $this->configuration;
        $data['social_media'] = $this->social_media;
        $data['categories'] = $this->category;
        
        return view('frontend/wishlist/index', $data);
    }
}
