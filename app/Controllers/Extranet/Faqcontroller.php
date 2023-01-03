<?php

namespace App\Controllers\Extranet;

use App\Models\FaqModel;

class Faqcontroller extends BaseController
{
    public function index()
    {
        $faq = new FaqModel();
        $data['faqs'] = $faq->orderBy('created_at', 'ASC')->get()->getResult();

        return view('extranet/faq/index', $data);
    }

    public function create()
    {
        return view('extranet/faq/create');
    }

    public function store()
    {
        $faq = new FaqModel();

        $faq->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/faq'));
    }

    public function show($id)
    {
        $faq = new FaqModel();
        $data['faq'] = $faq->where('id', $id)->get()->getFirstRow();

        return view('extranet/faq/show', $data);
    }

    public function edit($id)
    {
        $faq = new FaqModel();
        $data['faq'] = $faq->where('id', $id)->get()->getFirstRow();

        return view('extranet/faq/edit', $data);
    }

    public function update($id)
    {
        $faq = new FaqModel();

        $faq->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => session()->get('id'),
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/faq'));
    }

    public function destroy($id)
    {
        $faq = new FaqModel();
        $faq->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/faq'));
    }
}
