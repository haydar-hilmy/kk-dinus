<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Login User"
        ];
        return view("login", $data);
    }

    public function login(){
        $nip = htmlspecialchars($this->request->getVar('nip'), ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($this->request->getVar('password'), ENT_QUOTES, 'UTF-8');


    }
}

// MEMBUAT MODEL LOGIN dan LOGIC nya
