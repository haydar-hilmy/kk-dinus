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

        return view('admin-layouts/index-admin', $data);
    }
}
