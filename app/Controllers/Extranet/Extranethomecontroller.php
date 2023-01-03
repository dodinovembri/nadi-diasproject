<?php

namespace App\Controllers\Extranet;

use App\Models\OrderModel;
use App\Models\UserModel;

class Extranethomecontroller extends BaseController
{
    public function index()
    {
        $order = new OrderModel();
        $customer = new UserModel();

        $data['count_order'] = $order->countAll();
        $data['count_customer'] = $customer->where('role_code', 1)->countAll();

        return view('extranet/home/index', $data);
    }
}
