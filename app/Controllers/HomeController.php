<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        if(session('superadmin')){
            return redirect()->to(site_url('/superadmin'));
        } else if(session('ketua_kk')){
            return redirect()->to(site_url('/superadmin'));
        } else {
            $data = [
                "title" => "CMD-QE Laboratory – Computational Materials Design and Quantum Engineering"
            ];
            return view('index', $data);
        }
    }
}
