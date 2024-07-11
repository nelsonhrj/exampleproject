<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'userid';
    protected $allowedFields = ['name', 'lastname', 'address', 'picture', 'cellphone'];

    public function getUsers()
    {
        return $this->findAll();
    }
}
