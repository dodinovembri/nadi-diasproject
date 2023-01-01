<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class UserAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('logged_in') != TRUE) {
            return redirect()->to(base_url('login'));
        } else {
            if (session()->get('role_code') != "1") {
                return redirect()->to(base_url('login'));
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // code
    }
}
