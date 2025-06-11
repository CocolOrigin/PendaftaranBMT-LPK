<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = array(
            'title' => 'home' ,
            'isi' => 'v_home'
        );
        return view('layout/v_wrapper',$data);
    }

    public function home(): string
    {
        $data = array(
            'title' => 'home' ,
            'isi' => 'v_home'
        );
        return view('layout/v_wrapper',$data);
    }
    
}
