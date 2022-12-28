<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigurationModel;

class Configurationcontroller extends BaseController
{
    public function index()
    {
        $configuration = new ConfigurationModel();
        $data['configuration'] = $configuration->get()->getFirstRow();
        
        return view('extranet/configuration/index', $data);
    }

    public function update($id)
    {
        $configuration = new ConfigurationModel();
        $configuration->update($id, [
            'title'   => $this->request->getPost('title'),
            'keyword' => $this->request->getPost('keyword'),
            'author' => $this->request->getPost('author'),
            'text1_status' => $this->request->getPost('text1_status'),
            'text1_text' => $this->request->getPost('text1_text'),
            'text2_status' => $this->request->getPost('text2_status'),
            'text2_text' => $this->request->getPost('text2_text'),
            // 'logo' => $this->request->getPost('logo'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'working_day' => $this->request->getPost('working_day'),
            'description' => $this->request->getPost('description'),
            'copyright' => $this->request->getPost('copyright'),
        ]);

        return redirect()->to(base_url('extranet/configuration'));
    }
}
