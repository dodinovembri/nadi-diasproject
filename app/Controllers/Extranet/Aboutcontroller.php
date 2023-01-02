<?php

namespace App\Controllers\Extranet;
use App\Models\AboutModel;

class Aboutcontroller extends BaseController
{
    public function index()
    {
        $about = new AboutModel();
        $data['about'] = $about->get()->getFirstRow();

        return view('extranet/about/index', $data);
    }

    public function update($id)
    {
        $image = $this->request->getFile('image');

        $about = new AboutModel();
        if ($image != '') {
            $image_name = $image->getRandomName();
            $image->move('assets/images/abouts/', $image_name);

            $about->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'image' => $image_name,
                'text1' => $this->request->getPost('text1'),
                'text2' => $this->request->getPost('text2'),
                'text3' => $this->request->getPost('text3'),
                'description' => $this->request->getPost('description'),
                'status' => $this->request->getPost('status')
            ]);
        } else {
            $about->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'text1' => $this->request->getPost('text1'),
                'text2' => $this->request->getPost('text2'),
                'text3' => $this->request->getPost('text3'),
                'description' => $this->request->getPost('description'),
                'status' => $this->request->getPost('status')
            ]);
        }

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/about'));
    }
}
