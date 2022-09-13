<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\i18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [[
            'npm' => '0001',
            'nama'    => 'Ultramen',
            'alamat' => 'Galaksi Bima',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '0002',
            'nama'    => 'Kamen Rider',
            'alamat' => 'Nankatsu',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '0003',
            'nama'    => 'Power Rangers',
            'alamat' => 'Depok',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '0004',
            'nama'    => 'Gatot Kaca',
            'alamat' => 'Laut Selatan',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '0005',
            'nama'    => 'Doraemon',
            'alamat' => 'Korea',
            'created_at' =>Time::now()
        ],
    ];
        foreach($data_mahasiswa as $data){
            // Using Query Builder
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
