<?php

namespace App\Controllers\Extranet;
use App\Models\OrderModel;

class Ordercontroller extends BaseController
{
    public function index()
    {   
        $order = new OrderModel();
        $data['orders'] = $order->get()->getResult();

        return view('extranet/order/index', $data);
    }

    public function update($id)
    {
        $order = new OrderModel();
        $order->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => session()->get('id'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/order'));
    }
}
