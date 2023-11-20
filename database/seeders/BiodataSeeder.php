<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodatas = [
            [
                // ID = 1
                'nama_lengkap' => 'Aprilia M. Hunta',
                'alamat' => 'Marisa',
                'no_hp' => '82292055082',
                'jenis_kelamin' => 'p'
            ],
            [
                // ID 2
                'nama_lengkap' => 'Sahrul Gobel',
                'alamat' => 'Limboto',
                'no_hp' => '81242642469',
                'jenis_kelamin' => 'l'
            ],
        ];


        foreach ($biodatas as $biodata) {
            Biodata::create($biodata);
        }
    }
}
