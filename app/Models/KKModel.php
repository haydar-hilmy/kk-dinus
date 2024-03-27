<?php

namespace App\Models;

use CodeIgniter\Model;
use PDO;

class KKModel extends Model
{
    protected $table            = 'kk';
    protected $primaryKey       = 'id';

    protected $allowedFields    = ['shortName', 'fullName', 'nip', 'password', 'role'];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    public function getKK($id = false)
    {
        if (!$id) {
            $query = $this->db->query("SELECT * FROM kk WHERE role = 'kk'");
            $query = $query->getResult();
            return $query;
        }
        return $this->where('id', $id)->first();
    }

    public function getIdBySess(){
        if(session()->get('superadmin') !== null){
            $username = session()->get('superadmin');
            $query = $this->db->query("SELECT id FROM kk WHERE BINARY nip = ?", [$username])->getRow();
            return $query;
        } else if(session()->get('ketua_kk') !== null){
            $username = session()->get('ketua_kk');
            $query = $this->db->query("SELECT id FROM kk WHERE BINARY nip = ?", [$username])->getRow();
            return $query;
        } else {
            return false;
        }
    }

    public function auth($username = false, $password = false)
    {

        if (!$username || !$password) {
            return false;
        }

        $query = $this->db->query("SELECT * FROM kk WHERE BINARY nip = ?", [$username])->getRow();
        if (!$query) {
            return false;
        }

        if (!password_verify($password, $query->password)) {
            return false;
        }

        // filter role antara superadmin dengan ketua_kk
        if ($query->role == "superadmin") {
            session()->set('superadmin', $username);
        } else {
            session()->set('ketua_kk', $username);
        }

        return $query;
    }
}
