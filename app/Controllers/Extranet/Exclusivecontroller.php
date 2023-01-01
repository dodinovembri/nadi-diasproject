<?php

namespace App\Controllers\Extranet;
use App\Models\ExclusiveModel;

class Exclusivecontroller extends BaseController
{
    public function index()
    {
        $exclusive = new ExclusiveModel();
        $data['exclusive'] = $exclusive->get()->getFirstRow();

        return view('extranet/exclusive/index', $data);
    }

    public function update($id)
    {
        $image = $this->request->getFile('image');

        $exclusive = new ExclusiveModel();
        if ($image != '') {
            $image_name = $image->getRandomName();
            $image->move('assets/images/exclusives/', $image_name);

            $exclusive->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'image' => $image_name,
                'text1' => $this->request->getPost('text1'),
                'text2' => $this->request->getPost('text2'),
                'text_button' => $this->request->getPost('text_button'),
                'button_link' => $this->request->getPost('button_link'),
                'text3' => $this->request->getPost('text3'),
                'text4' => $this->request->getPost('text4'),
                'text5' => $this->request->getPost('text5'),
                'text6' => $this->request->getPost('text6'),
                'status' => $this->request->getPost('status')
            ]);
        } else {
            $exclusive->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'text1' => $this->request->getPost('text1'),
                'text2' => $this->request->getPost('text2'),
                'text_button' => $this->request->getPost('text_button'),
                'button_link' => $this->request->getPost('button_link'),
                'text3' => $this->request->getPost('text3'),
                'text4' => $this->request->getPost('text4'),
                'text5' => $this->request->getPost('text5'),
                'text6' => $this->request->getPost('text6'),
                'status' => $this->request->getPost('status')
            ]);
        }

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/exclusive'));
    }
}
