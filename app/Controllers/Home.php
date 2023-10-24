<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $gallerydir = 'images/gallery';
        $files = glob($gallerydir . "/*");
        $data = $this->data;
        $data['title'] = 'Wedding of Dinda & Lilo';
        $data['desc'] = 'Dinda & Lillo akan segera menikah pada 11 November 2023.';
        $data['galleries'] = $files;
        return view('undangan', $data);
    }

    public function guestlist()
    {
        phpinfo( );
    }
}
