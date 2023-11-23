<?php

namespace Database\Seeders;

use App\Models\Pengelola;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengelolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengelola::create([
            'desa_id' => 1,
            'user_id' => 2,
        ]);
    }
}
