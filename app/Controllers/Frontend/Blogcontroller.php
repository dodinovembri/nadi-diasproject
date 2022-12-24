<?php

namespace App\Controllers\Frontend;

class Blogcontroller extends BaseController
{
    public function index()
    {
        return view('frontend/blog/index');
    }
}
