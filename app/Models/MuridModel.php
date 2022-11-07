<?php

namespace App\Models;

use CodeIgniter\Model;

class MuridModel extends Model 
{
    protected $table = "db_murid";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama', 'email', 'bidang', 'alamat'];
}