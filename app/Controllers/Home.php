<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $gallerydir = 'images/gallery';
        $files = glob($gallerydir . "/*");
        $data['title'] = 'Wedding of Dinda & Lilo';
        $data['desc'] = '';
        $data['galleries'] = $files;
        return view('undangan', $data);
    }
}
