<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa;';
    protected $useTimeStamp = true;


    protected $useAutoIncrement = true;
    protected $allowedFields    = ['npm', 'nama', 'alamat', 'created_at', 'update_at'];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'update_at';
}
