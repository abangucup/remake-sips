<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                // 1
                'level' => 'admin',
                'name' => 'P3B3K',
            ],
            [
                // 2
                'level' => 'pengelola',
                'name' => 'Admin Desa',
            ],
            [
                // 3
                'level' => 'sopir',
                'name' => 'Petugas Pengangkut',
            ],
            [
                // 4
                'level' => 'pengguna',
                'name' => 'Pelanggan',
            ],
        ];

        foreach ($roles as $role) {
            Role::Create($role);
        }
    }
}
