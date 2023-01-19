<?php

namespace App\Controllers\Extranet;

use App\Models\TicketModel;

class Ticketcontroller extends BaseController
{
    public function index()
    {
        $ticket = new TicketModel();
        $data['tickets'] = $ticket->orderBy('created_at', 'ASC')->get()->getResult();

        return view('extranet/ticket/index', $data);
    }

    public function create()
    {
        return view('extranet/ticket/create');
    }

    public function store()
    {
        $ticket = new TicketModel();

        $ticket->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/ticket'));
    }

    public function show($id)
    {
        $ticket = new TicketModel();
        $data['ticket'] = $ticket->where('id', $id)->get()->getFirstRow();

        return view('extranet/ticket/show', $data);
    }

    public function edit($id)
    {
        $ticket = new TicketModel();
        $data['ticket'] = $ticket->where('id', $id)->get()->getFirstRow();

        return view('extranet/ticket/edit', $data);
    }

    public function update($id)
    {
        $ticket = new TicketModel();

        $ticket->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => session()->get('id'),
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/ticket'));
    }
}
