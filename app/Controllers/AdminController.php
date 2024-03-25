<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BannerModel;
use App\Models\KKModel;

class AdminController extends BaseController
{
    protected $bannerModel;
    protected $kkModel;
    public function __construct()
    {
        $this->bannerModel = new BannerModel();
        $this->kkModel = new KKModel();
    }
    // public function index()
    // {

    // }

    public function addBanner(){
        $data = [
            "title" => "Add Banner",
            "kelompokKajian" => $this->kkModel->getKK()
        ];

        return view('admin/layouts/add-banner', $data);
    }

    public function deleteBanner($id){
        $findBanner = $this->bannerModel->find($id);
        
        $this->bannerModel->delete($id);
        
        return redirect()->to(site_url('superadmin/banner'));
    }
}