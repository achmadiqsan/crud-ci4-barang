<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Hallo extends Controller
{
    public function index()
    {
        $data['title'] = 'Hallo Dunia !';
        $data['msg'] = 'Selamat datang di Codeigniter 4';
        return view('hallo_view',$data);
    }
}