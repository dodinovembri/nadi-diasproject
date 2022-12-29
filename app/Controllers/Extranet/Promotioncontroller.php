<?php

namespace App\Controllers\Extranet;
use App\Models\PromotionModel;

class Promotioncontroller extends BaseController
{
    public function index()
    {
        $promotion = new PromotionModel();
        $data['promotions'] = $promotion->get()->getResult();

        return view('extranet/promotion/index', $data);
    }

    public function create()
    {
        return view('extranet/promotion/create');
    }

    public function store()
    {
        $promotion = new PromotionModel();
        $promotion->insert([
            'created_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/promotion/index'));
    }    

    public function show($id)
    {
        $promotion = new PromotionModel();
        $data['promotion'] = $promotion->where('id', $id)->get()->getFirstRow();

        return view('extranet/promotion/show', $data);
    }    

    public function edit($id)
    {
        $promotion = new PromotionModel();
        $data['promotion'] = $promotion->where('id', $id)->get()->getFirstRow();

        return view('extranet/promotion/edit', $data);
    }   
    
    public function update($id)
    {
        $promotion = new PromotionModel();
        $promotion->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/promotion/index'));
    }

    public function destroy($id)
    {
        $promotion = new PromotionModel();
        $promotion->delete($id);
        return redirect()->to(base_url('extranet/promotion/index'));
    }
}
