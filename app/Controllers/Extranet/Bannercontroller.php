<?php

namespace App\Controllers\Extranet;
use App\Models\BannerModel;

class Bannercontroller extends BaseController
{
    public function index()
    {
        $banner = new BannerModel();
        $data['banner'] = $banner->get()->getFirstRow();

        return view('extranet/banner/index', $data);
    }

    public function update($id)
    {
        $banner_image = $this->request->getFile('banner_image');

        $banner = new BannerModel();
        if ($banner_image != '') {
            $banner_image_name = $banner_image->getRandomName();
            $banner_image->move('assets/images/banners/', $banner_image_name);

            $banner->update($id, [
                'status' => $this->request->getPost('status'),
                'modified_at' => date('Y-m-d H:i:s'),
                'image' => $banner_image_name,
                'text1' => $this->request->getPost('text1'),
                'text2' => $this->request->getPost('text2'),
                'text_button' => $this->request->getPost('text_button'),
                'button_link' => $this->request->getPost('button_link')
            ]);
        } else {
            $banner->update($id, [
                'status' => $this->request->getPost('status'),
                'modified_at' => date('Y-m-d H:i:s'),
                'text1' => $this->request->getPost('text1'),
                'text2' => $this->request->getPost('text2'),
                'text_button' => $this->request->getPost('text_button'),
                'button_link' => $this->request->getPost('button_link')
            ]);
        }

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/banner'));
    }
}
