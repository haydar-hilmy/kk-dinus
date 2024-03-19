<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\KKModel;

class LoginController extends BaseController
{
    protected $kkModel;

    public function __construct(){
        $this->kkModel = new KKModel();
    }

    public function index()
    {
        $data = [
            "title" => "Login Admin"
        ];
        return view("login", $data);
    }

    public function auth(){
        $nip = htmlspecialchars($this->request->getVar('nip'), ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($this->request->getVar('password'), ENT_QUOTES, 'UTF-8');

        $query = $this->kkModel->auth($nip, $password);

        if(!$query){
            return redirect()->to('/login')->withInput()->with("error", "NIP atau Password salah!");
        }

        return redirect()->to("/");
    }

    public function logout(){
        session()->destroy();

        return redirect()->to('/');
    }
}
