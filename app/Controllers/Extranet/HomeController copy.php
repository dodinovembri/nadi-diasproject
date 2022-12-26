<?php

namespace App\Controllers\Extranet;

class HomeController extends BaseController
{
    public function index()
    {
        return view('extranet/home/index');
    }
}
