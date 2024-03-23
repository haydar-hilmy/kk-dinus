<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KKController extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Super Admin"
        ];

        return view('admin/index-admin', $data);
    }

    public function banner(){
        $data = ["title" => "Banner"];

        return view('admin/layouts/banner', $data);
    }
}
