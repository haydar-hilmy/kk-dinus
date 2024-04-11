<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BannerModel;
use App\Models\KKModel;
use PDO;

class AdminController extends BaseController
{
    protected $bannerModel;
    protected $kkModel;
    public function __construct()
    {
        $this->bannerModel = new BannerModel();
        $this->kkModel = new KKModel();
    }
    public function index()
    {
        $data = [
            "title" => "Super Admin",
            "kelompokKajian" => $this->kkModel->getKK()
        ];

        return view('admin/index-admin', $data);
    }

    
}