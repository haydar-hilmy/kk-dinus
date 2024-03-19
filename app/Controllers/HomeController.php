<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        if(session('superadmin')){
            $data = ["title" => "Super Admin"];
        } else if(session('ketua_kk')){
            $data = ["title" => "Ketua KK"];
        } else {
            $data = [
                "title" => "CMD-QE Laboratory – Computational Materials Design and Quantum Engineering"
            ];
        }
        return view('index', $data);
    }
}
