<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Pages extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['news'] = $model->getPosts;
        echo view('templates/header', $data);
        echo view('pages/home');
        echo view('templates/footer');
    }

    public function showme($page = 'home'){      

        if(!file_exists( APPPATH . 'views/pages/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        echo view('templates/header');
        echo view('pages/'.$page);
        echo view('templates/footer');
    }
}
