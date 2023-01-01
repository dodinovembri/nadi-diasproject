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

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/promotions/', $image_name);

        $promotion->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'name' => $this->request->getPost('name'),
            'image' => $image_name,
            'text1' => $this->request->getPost('text1'),
            'text2' => $this->request->getPost('text2'),
            'text_button' => $this->request->getPost('text_button'),
            'button_link' => $this->request->getPost('button_link'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/promotion'));
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
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/promotions/', $image_name);

            $promotion->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'image' => $image_name,
                'text1' => $this->request->getPost('text1'),
                'text2' => $this->request->getPost('text2'),
                'text_button' => $this->request->getPost('text_button'),
                'button_link' => $this->request->getPost('button_link'),
                'status' => $this->request->getPost('status')
            ]);
        } else {
            $promotion->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'text1' => $this->request->getPost('text1'),
                'text2' => $this->request->getPost('text2'),
                'text_button' => $this->request->getPost('text_button'),
                'button_link' => $this->request->getPost('button_link'),
                'status' => $this->request->getPost('status')
            ]);
        }

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/promotion'));
    }

    public function destroy($id)
    {
        $promotion = new PromotionModel();
        $promotion->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/promotion'));
    }
}
