<?php

namespace App\Controllers\Extranet;

class Blogcontroller extends BaseController
{
    public function index()
    {
        return view('extranet/blog/index');
    }
}
