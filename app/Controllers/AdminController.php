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
    // public function index()
    // {

    // }

    public function addBanner()
    {
        $data = [
            "title" => "Add Banner",
            "kelompokKajian" => $this->kkModel->getKK()
        ];

        return view('admin/layouts/add-banner', $data);
    }

    public function postBanner()
    {
        session()->remove('file');
        if (!$this->validate([
            'file' => [
                'rules' => 'max_size[file,4096]|is_image[file]|mime_in[file,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran Foto Max 4MB',
                    'mime_in' => 'Hanya File JPG/PNG Yang Diizinkan.',
                    'is_image' => 'File harus berupa gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to("superadmin/banner/add")->withInput()->with('file', $validation->getErrors());
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

    public function editBanner($id){
        $data = [
            "title" => "Edit Banner",
            "kelompokKajian" => $this->kkModel->getKK(),
            "banner" => $this->bannerModel->getBanner($id)
        ];

        return view('admin/layouts/edit-banner', $data);
    }

    public function updateBanner($id){
        if (!$this->validate([
            'file' => [
                'rules' => 'max_size[file,4096]|is_image[file]|mime_in[file,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran Foto Max 4MB',
                    'mime_in' => 'Hanya File JPG/PNG Yang Diizinkan.',
                    'is_image' => 'File harus berupa gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('file', $validation->getErrors());
        }

        $getFile = $this->request->getFile('file');

        if($getFile->getError() == 4){
            $fileName = $this->request->getVar("oldFile");
        } else {
            $fileName = str_replace(' ', '', $this->request->getVar('judul')) . "_" . $getFile->getRandomName();
            $getFile->move('asset/banner/', $fileName);
            unlink('asset/banner/' . $this->request->getVar("oldFile"));
        }

        $data = [
            "id" => $this->request->getVar('id'),
            "id_kk" => $this->kkModel->getIdBySess()->id,
            "title" => $this->request->getVar("judul"),
            "visibility" => $this->request->getVar("visibility"),
            "image" => $fileName,
            "description" => $this->request->getVar("deskripsi")
        ];

        $this->bannerModel->save($data);

        return redirect()->to('/superadmin/banner');
    }

    public function deleteBanner($id)
    {
        $findBanner = $this->bannerModel->find($id);

        if ($findBanner["image"] != "" || $findBanner["image"] != null) {
            unlink('asset/banner/' . $findBanner['image']);
        }

        $this->bannerModel->delete($id);

        return redirect()->to(site_url('superadmin/banner'));
    }
}
