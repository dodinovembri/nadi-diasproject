<?php

namespace App\Controllers\Frontend;
// namespace App\Controllers;

class Homecontrollerw extends BaseController
{
    public function index()
    {
        return view('frontend/home/index');
    }
}
