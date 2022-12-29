<?php

namespace App\Controllers\Extranet;
use App\Models\SliderModel;

class Slidercontroller extends BaseController
{
    public function index()
    {
        $slider = new SliderModel();
        $data['sliders'] = $slider->get()->getResult();

        return view('extranet/slider/index', $data);
    }

    public function create()
    {
        return view('extranet/slider/create');
    }

    public function store()
    {
        $slider = new SliderModel();
        $slider->insert([
            'created_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/slider/index'));
    }    

    public function show($id)
    {
        $slider = new SliderModel();
        $data['slider'] = $slider->where('id', $id)->get()->getFirstRow();

        return view('extranet/slider/show', $data);
    }    

    public function edit($id)
    {
        $slider = new SliderModel();
        $data['slider'] = $slider->where('id', $id)->get()->getFirstRow();

        return view('extranet/slider/edit', $data);
    }   
    
    public function update($id)
    {
        $slider = new SliderModel();
        $slider->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            // 'name' => $this->request->getPost('name'),
            // 'icon' => $this->request->getPost('icon'),
            // 'link' => $this->request->getPost('link'),
            // 'status' => $this->request->getPost('status')
        ]);
        return redirect()->to(base_url('extranet/slider/index'));
    }

    public function destroy($id)
    {
        $slider = new SliderModel();
        $slider->delete($id);
        return redirect()->to(base_url('extranet/slider/index'));
    }
}