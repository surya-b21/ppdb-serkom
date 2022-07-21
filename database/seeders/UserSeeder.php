<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nama' => 'Admin',
                'email' => 'admin@email.com',
                'is_admin' => 1,
                'password' => bcrypt('admin12345'),
            ],
            [
                'nama' => 'User',
                'email' => 'user@email.com',
                'is_admin' => 0,
                'password' => bcrypt('user12345'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
