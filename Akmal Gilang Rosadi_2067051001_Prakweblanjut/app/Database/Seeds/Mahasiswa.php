<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
        [   
            'npm'           => '2067051001',
            'nama'          => 'Akmal Gilang Rosadi',
            'alamat'        => 'Lampung',
            'created_at'    =>  Time::now()
        ],
        [   
            'npm'           => '2017051001',
            'nama'          => 'Renaldi',
            'alamat'        => 'Selatan',
            'created_at'    =>  Time::now()
        ],
        [   
            'npm'           => '2067051002',
            'nama'          => 'Rosadi',
            'alamat'        => 'Palembang',
            'created_at'    =>  Time::now()
        ],
            
        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data){
        $this->db->table('mahasiswa')->insert($data);
      }
    }
}
