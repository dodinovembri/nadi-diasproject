<?php

namespace App\Controllers\Extranet;
use App\Models\BlogModel;

class Blogcontroller extends BaseController
{
    public function index()
    {
        $blog = new BlogModel();
        $data['blogs'] = $blog->get()->getResult();

        return view('extranet/blog/index', $data);
    }

    public function create()
    {
        return view('extranet/blog/create');
    }

    public function store()
    {
        $blog = new BlogModel();
        $blog->insert([
            'created_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/blog/index'));
    }    

    public function show($id)
    {
        $blog = new BlogModel();
        $data['blog'] = $blog->where('id', $id)->get()->getFirstRow();

        return view('extranet/blog/show', $data);
    }    

    public function edit($id)
    {
        $blog = new BlogModel();
        $data['blog'] = $blog->where('id', $id)->get()->getFirstRow();

        return view('extranet/blog/edit', $data);
    }   
    
    public function update($id)
    {
        $blog = new BlogModel();
        $blog->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/blog/index'));
    }

    public function destroy($id)
    {
        $blog = new BlogModel();
        $blog->delete($id);
        return redirect()->to(base_url('extranet/blog/index'));
    }
}