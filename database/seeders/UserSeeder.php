<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'role_id' => 1,
                'biodata_id' => 1,
                'username' => 'p3b3k',
                'password' => Hash::make('password'),
                'email' => 'p3b3k@gmail.com',
            ],
            [
                'role_id' => 2,
                'biodata_id' => 2,
                'username' => 'desa',
                'password' => Hash::make('password'),
                'email' => 'desa@gmail.com',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
