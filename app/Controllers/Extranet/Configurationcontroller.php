<?php

namespace App\Controllers\Extranet;
use CodeIgniter\Files\File;

use App\Models\ConfigurationModel;

class Configurationcontroller extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $configuration = new ConfigurationModel();
        $data['configuration'] = $configuration->get()->getFirstRow();
        
        return view('extranet/configuration/index', $data);
    }

    public function update($id)
    {
        $frontend_logo = $this->request->getFile('frontend_logo');
        $extranet_logo = $this->request->getFile('extranet_logo');
        
        $configuration = new ConfigurationModel();
        if ($frontend_logo != '' && $extranet_logo != '') {
            // frontend logo
            $frontend_logo_name = $frontend_logo->getRandomName();
            $frontend_logo->move('assets/images/logo/', $frontend_logo_name);
            
            // extranet logo
            $extranet_logo_name = $extranet_logo->getRandomName();
            $extranet_logo->move('assets/images/logo/', $extranet_logo_name);        

            $configuration->update($id, [
                'title'   => $this->request->getPost('title'),
                'keyword' => $this->request->getPost('keyword'),
                'author' => $this->request->getPost('author'),
                'text1_status' => $this->request->getPost('text1_status'),
                'text1_text' => $this->request->getPost('text1_text'),
                'text2_status' => $this->request->getPost('text2_status'),
                'text2_text' => $this->request->getPost('text2_text'),
                'frontend_logo_name' => $frontend_logo_name,
                'extranet_logo_name' => $extranet_logo_name,
                'phone' => $this->request->getPost('phone'),
                'address' => $this->request->getPost('address'),
                'email' => $this->request->getPost('email'),
                'working_day' => $this->request->getPost('working_day'),
                'description' => $this->request->getPost('description'),
                'copyright' => $this->request->getPost('copyright'),
            ]);
        } elseif ($frontend_logo != '') {
            // frontend logo
            $frontend_logo_name = $frontend_logo->getRandomName();
            $frontend_logo->move('assets/images/logo/', $frontend_logo_name);

            $configuration->update($id, [
                'title'   => $this->request->getPost('title'),
                'keyword' => $this->request->getPost('keyword'),
                'author' => $this->request->getPost('author'),
                'text1_status' => $this->request->getPost('text1_status'),
                'text1_text' => $this->request->getPost('text1_text'),
                'text2_status' => $this->request->getPost('text2_status'),
                'text2_text' => $this->request->getPost('text2_text'),
                'frontend_logo_name' => $frontend_logo_name,
                'phone' => $this->request->getPost('phone'),
                'address' => $this->request->getPost('address'),
                'email' => $this->request->getPost('email'),
                'working_day' => $this->request->getPost('working_day'),
                'description' => $this->request->getPost('description'),
                'copyright' => $this->request->getPost('copyright'),
            ]);        
        } elseif ($extranet_logo != '') {
            // extranet logo
            $extranet_logo_name = $extranet_logo->getRandomName();
            $extranet_logo->move('assets/images/logo/', $extranet_logo_name);   

            $configuration->update($id, [
                'title'   => $this->request->getPost('title'),
                'keyword' => $this->request->getPost('keyword'),
                'author' => $this->request->getPost('author'),
                'text1_status' => $this->request->getPost('text1_status'),
                'text1_text' => $this->request->getPost('text1_text'),
                'text2_status' => $this->request->getPost('text2_status'),
                'text2_text' => $this->request->getPost('text2_text'),
                'extranet_logo_name' => $extranet_logo_name,
                'phone' => $this->request->getPost('phone'),
                'address' => $this->request->getPost('address'),
                'email' => $this->request->getPost('email'),
                'working_day' => $this->request->getPost('working_day'),
                'description' => $this->request->getPost('description'),
                'copyright' => $this->request->getPost('copyright'),
            ]);
        } else {
            $configuration->update($id, [
                'title'   => $this->request->getPost('title'),
                'keyword' => $this->request->getPost('keyword'),
                'author' => $this->request->getPost('author'),
                'text1_status' => $this->request->getPost('text1_status'),
                'text1_text' => $this->request->getPost('text1_text'),
                'text2_status' => $this->request->getPost('text2_status'),
                'text2_text' => $this->request->getPost('text2_text'),
                'phone' => $this->request->getPost('phone'),
                'address' => $this->request->getPost('address'),
                'email' => $this->request->getPost('email'),
                'working_day' => $this->request->getPost('working_day'),
                'description' => $this->request->getPost('description'),
                'copyright' => $this->request->getPost('copyright'),
            ]);
        }

        return redirect()->to(base_url('extranet/configuration'));
    }
}
