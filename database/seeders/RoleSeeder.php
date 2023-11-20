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
                'level' => 'admin',
                'name' => 'P3B3K',
            ],
            [
                'level' => 'pengelola',
                'name' => 'Admin Desa',
            ],
            [
                'level' => 'sopir',
                'name' => 'Petugas Pengangkut',
            ],
            [
                'level' => 'pengguna',
                'name' => 'Pelanggan',
            ],
        ];

        foreach ($roles as $role) {
            Role::Create($role);
        }
    }
}
