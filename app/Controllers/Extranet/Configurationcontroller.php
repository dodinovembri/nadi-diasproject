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
}
