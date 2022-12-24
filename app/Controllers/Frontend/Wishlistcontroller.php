<?php

namespace App\Controllers\Frontend;

class Wishlistcontroller extends BaseController
{
    public function index()
    {
        return view('frontend/wishlist/index');
    }
}
