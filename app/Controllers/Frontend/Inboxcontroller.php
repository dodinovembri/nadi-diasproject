<?php

namespace App\Controllers\Frontend;

use App\Models\InboxModel;

class Inboxcontroller extends BaseController
{

    public function store()
    {
        $inbox = new InboxModel();
        
        $inbox->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
            'status' => 1
        ]);

        return redirect()->to(base_url('contact'));
    }
}
