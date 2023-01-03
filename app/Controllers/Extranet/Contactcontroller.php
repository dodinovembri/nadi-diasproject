<?php

namespace App\Controllers\Extranet;
use App\Models\ContactModel;

class Contactcontroller extends BaseController
{
    public function index()
    {
        $contact = new ContactModel();
        $data['contact'] = $contact->get()->getFirstRow();

        return view('extranet/contact/index', $data);
    }

    public function update($id)
    {
        $contact = new ContactModel();
        $contact->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => session()->get('id'),
            'iframe_maps_link' => $this->request->getPost('iframe_maps_link'),
            'text1' => $this->request->getPost('text1'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/contact'));
    }
}
