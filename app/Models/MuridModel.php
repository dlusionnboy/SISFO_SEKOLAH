<?php

namespace App\Models;

use CodeIgniter\Model;

class MuridModel extends Model 
{
    protected $table = "murid_db";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama', 'email', 'bidang', 'alamat'];
}