<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "CMD-QE Laboratory – Computational Materials Design and Quantum Engineering"
        ];

        return view('index', $data);
    }
}
