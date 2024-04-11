<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KKModel;
use App\Models\BannerModel;

class KKController extends BaseController
{
    protected $kkModel;
    protected $bannerModel;
    public function __construct(){
        $this->kkModel = new KKModel();
        $this->bannerModel = new BannerModel();
    }

    public function index(){
        $data = [
            "title" => "Edit Banner",
            "kelompokKajian" => $this->kkModel->getKK(),
            "banners" => $this->bannerModel->getBanner()
        ];

        return view('admin/layouts/kk/kk', $data);
    }

}
