<?php

namespace App\Controllers;
class Admin extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        //cek level dari session
        if($this->session->get('level') == 'Gudang'){
            return redirect()->to('/gudang');
        }
        return view('admin/index');
    }
}