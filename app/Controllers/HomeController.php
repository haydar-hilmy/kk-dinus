<?php

namespace App\Controllers;
use App\Models\BannerModel;

class HomeController extends BaseController
{
    protected $bannerModel;
    public function __construct(){
        $this->bannerModel = new BannerModel();
    }

    public function index()
    {
        if(session('superadmin')){
            return redirect()->to(site_url('/superadmin'));
        } else if(session('ketua_kk')){
            return redirect()->to(site_url('/superadmin'));
        } else {
            $data = [
                "title" => "CMD-QE Laboratory – Computational Materials Design and Quantum Engineering",
                "banners" => $this->bannerModel->getBanner()
            ];
            return view('index', $data);
        }
    }
}
