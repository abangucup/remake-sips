<?php

namespace Database\Seeders;

use App\Models\Desa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $desas = [
            [
                'nama_desa' => 'Marisa Utara',
            ],
            [
                'nama_desa' => 'Teratai',
            ],
            [
                'nama_desa' => 'Pohuwato Timur',
            ],
            [
                'nama_desa' => 'Bulangita',
            ],
            [
                'nama_desa' => 'Palopo',
            ],
            [
                'nama_desa' => 'Pohuwato',
            ],
            [
                'nama_desa' => 'Botubilotahu',
            ],
            [
                'nama_desa' => 'Marisa Selatan',
            ],
            [
                'nama_desa' => 'Duhiadaa',
            ],
        ];

        foreach ($desas as $desa) {
            Desa::create($desa);
        }
    }
}
