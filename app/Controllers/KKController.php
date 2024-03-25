<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KKModel;
use App\Models\BannerModel;

class KKController extends BaseController
{
    protected $kkmodel;
    protected $bannermodel;
    public function __construct(){
        $this->kkmodel = new KKModel();
        $this->bannermodel = new BannerModel();
    }

    public function index()
    {
        $data = [
            "title" => "Super Admin",
            "kelompokKajian" => $this->kkmodel->getKK()
        ];

        return view('admin/index-admin', $data);
    }

    public function banner(){
        $data = [
            "title" => "Banner",
            "kelompokKajian" => $this->kkmodel->getKK(),
            "banners" => $this->bannermodel->getBanner()
        ];

        return view('admin/layouts/banner', $data);
    }

}
