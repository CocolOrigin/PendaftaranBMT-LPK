<?php

namespace App\Controllers;

class Web extends BaseController
{
    public function index(): string
    {
        $data = array(
            'title' => 'beranda',
        );
        return view('v_beranda', $data);
    }
}
