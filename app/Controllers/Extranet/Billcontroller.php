<?php

namespace App\Controllers\Extranet;

use App\Models\BillModel;

class Billcontroller extends BaseController
{
    public function index()
    {
        $bill = new BillModel();
        $data['bills'] = $bill->orderBy('created_at', 'ASC')->get()->getResult();

        return view('extranet/bill/index', $data);
    }
}
