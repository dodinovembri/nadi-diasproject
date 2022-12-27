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
        // 
    }    

    public function show()
    {
        return view('extranet/social-media/create');
    }    

    public function edit()
    {
        return view('extranet/social-media/create');
    }   
    
    public function update()
    {
        // 
    }

    public function destroy()
    {
        // 
    }
}
