<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $data = [
            [
                'name' => 'admin_universitas',
                'email' => 'aa@aa.com',
                'password' => Hash::make('password'),
                'role' => '100'
            ],
            [
                'name' => 'admin_ftik',
                'email' => 'ab@aa.com',
                'password' => Hash::make('password'),
                'role' => '1'
            ],
            [
                'name' => 'admin_fasya',
                'email' => 'ac@aa.com',
                'password' => Hash::make('password'),
                'role' => '2'
            ],
            [
                'name' => 'admin_fuad',
                'email' => 'ad@aa.com',
                'password' => Hash::make('password'),
                'role' => '3'
            ],
            [
                'name' => 'admin_febi',
                'email' => 'ae@aa.com',
                'password' => Hash::make('password'),
                'role' => '4'
            ]
        ];

        User::insert($data);


    }
}
