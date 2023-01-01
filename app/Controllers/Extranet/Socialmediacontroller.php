<?php

namespace App\Controllers\Extranet;
use App\Models\SocialMediaModel;

class Socialmediacontroller extends BaseController
{
    public function index()
    {
        $social_media = new SocialMediaModel();
        $data['social_medias'] = $social_media->get()->getResult();

        return view('extranet/social-media/index', $data);
    }

    public function create()
    {
        return view('extranet/social-media/create');
    }

    public function store()
    {
        $social_media = new SocialMediaModel();
        $social_media->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'name' => $this->request->getPost('name'),
            'icon' => $this->request->getPost('icon'),
            'link' => $this->request->getPost('link'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/social-media'));
    }    

    public function show($id)
    {
        $social_media = new SocialMediaModel();
        $data['social_media'] = $social_media->where('id', $id)->get()->getFirstRow();

        return view('extranet/social-media/show', $data);
    }    

    public function edit($id)
    {
        $social_media = new SocialMediaModel();
        $data['social_media'] = $social_media->where('id', $id)->get()->getFirstRow();

        return view('extranet/social-media/edit', $data);
    }   
    
    public function update($id)
    {
        $social_media = new SocialMediaModel();
        $social_media->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'name' => $this->request->getPost('name'),
            'icon' => $this->request->getPost('icon'),
            'link' => $this->request->getPost('link'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/social-media'));
    }

    public function destroy($id)
    {
        $social_media = new SocialMediaModel();
        $social_media->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/social-media'));
    }
}
