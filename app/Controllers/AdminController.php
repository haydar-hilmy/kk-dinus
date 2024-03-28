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

    public function postBanner(){

        if (!$this->validate([
            'file' => [
                'rules' => 'max_size[file,5120]|is_image[file]|mime_in[file,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran Foto Max 5MB',
                    'mime_in' => 'Hanya File JPG/PNG Yang Diizinkan.',
                    'is_image' => 'File harus berupa gambar'
                ]
            ]
        ])){
            $validation = \Config\Services::validation();
            // return redirect()->back()->withInput()->with('validation', $validation);
            // return redirect()->to("superadmin/banner/add")->withInput()->with('validation', $validation);
            dd($validation);
        }

        $get_File = $this->request->getFile('file');

        if ($get_File->getError() == 4) {
            $fileName = "";
        } else {
            // generate random name
            $fileName =  str_replace(' ', '', $this->request->getVar('judul')) . "_" . $get_File->getRandomName();

            // pindahkan ke folder
            $get_File->move('asset/banner', $fileName);
        }

        $data = [
            "id_kk" => $this->kkModel->getIdBySess()->id,
            "title" => $this->request->getVar("judul"),
            "image" => $fileName,
            "description" => $this->request->getVar("deskripsi")
        ];

        $this->bannerModel->save($data);

        session()->setFlashdata('message', 'Banner berhasil dikirim.');

        return redirect()->to('superadmin/banner');
    }
    
    public function deleteBanner($id){
        $findBanner = $this->bannerModel->find($id);
        
        $this->bannerModel->delete($id);
        
        return redirect()->to(site_url('superadmin/banner'));
    }
}