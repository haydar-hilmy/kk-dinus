<?php

namespace App\Models;

use CodeIgniter\Model;

class KKModel extends Model
{
    protected $table            = 'kk';
    protected $primaryKey       = 'id';

    protected $allowedFields    = ['shortName', 'fullName', 'nip', 'password', 'role'];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';


    public function auth($username = false, $password = false)
    {

        if (!$username || !$password) {
            return false;
        }

        $query = $this->where('nip', $username)->first();

        if (!$query) {
            return false;
        }

        if (!password_verify($password, $query["password"])) {
            return false;
        }

        // filter role antara superadmin dengan ketua_kk
        if ($query["role"] == "superadmin") {
            session()->set('superadmin', $username);
        } else {
            session()->set('ketua_kk', $username);
        }

        return $query;
    }
}
