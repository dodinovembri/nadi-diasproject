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
        $exclusive_image = $this->request->getFile('exclusive_image');

        $exclusive = new ExclusiveModel();
        if ($exclusive_image != '') {
            $exclusive_image_name = $exclusive_image->getRandomName();
            $exclusive_image->move('assets/images/exclusives/', $exclusive_image_name);

            $exclusive->update($id, [
                'status' => $this->request->getPost('status'),
                'modified_at' => date('Y-m-d H:i:s'),
                'image' => $exclusive_image_name,
                // 'text1' => $this->request->getPost('text1'),
                // 'text2' => $this->request->getPost('text2'),
                // 'text_button' => $this->request->getPost('text_button'),
                // 'button_link' => $this->request->getPost('button_link')
            ]);
        } else {
            $exclusive->update($id, [
                'status' => $this->request->getPost('status'),
                'modified_at' => date('Y-m-d H:i:s'),
                // 'text1' => $this->request->getPost('text1'),
                // 'text2' => $this->request->getPost('text2'),
                // 'text_button' => $this->request->getPost('text_button'),
                // 'button_link' => $this->request->getPost('button_link')
            ]);
        }

        return redirect()->to(base_url('extranet/exclusive/index'));
    }
}
