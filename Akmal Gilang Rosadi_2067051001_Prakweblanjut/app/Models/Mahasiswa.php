<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimetamps     = true;
    protected $dateformat       = 'datetime';
    protected $createdFields    = 'created_at';
    protected $updatedFields    = 'updated_at';
}
