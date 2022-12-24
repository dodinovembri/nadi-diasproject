<?php

namespace App\Controllers\Frontend;

class Cartcontroller extends BaseController
{
    public function index()
    {
        return view('frontend/cart/index');
    }
}
