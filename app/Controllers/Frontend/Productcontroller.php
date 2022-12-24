<?php

namespace App\Controllers\Frontend;

class Productcontroller extends BaseController
{
    public function index()
    {
        return view('frontend/product/index');
    }
}
