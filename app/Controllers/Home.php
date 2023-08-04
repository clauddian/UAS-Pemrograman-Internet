<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        $data['title'] = "Aplikasi CRUD Pendataan Barang PT ABC";
        echo view("welcome_message", $data);
    }
}