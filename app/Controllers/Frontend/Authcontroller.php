<?php

namespace App\Controllers\Frontend;

class Authcontroller extends BaseController
{
    public function login()
    {
        return view('frontend/auth/login');
    }

    public function forgot()
    {
        return view('frontend/auth/forgot');
    }
}
