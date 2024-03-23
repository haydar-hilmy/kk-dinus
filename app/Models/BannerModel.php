<?php

namespace App\Models;

use CodeIgniter\Model;

class BannerModel extends Model
{
    protected $table            = 'banner';
    protected $primaryKey       = 'id';
    protected $protectFields    = true;
    protected $allowedFields    = ['id_kk', 'title', 'image', 'description'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getBanner($id = false){
        if(!$id){
            $query = $this->db->query("SELECT * FROM banner ");
            return $query->getResult();
        }
        return $this->where('id', $id)->first();
    }
}
