<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');

        $users = [
            [
                'name' => 'Pedro',
                'email' => 'pedro@gmail.com',
                'password' => $password,
            ],
            [
                'name' => 'Javier',
                'email' => 'javier@gmail.com',
                'password' => $password,
            ],
            [
                'name' => 'Emilio',
                'email' => 'emilio@gmail.com',
                'password' => $password,
            ],
            [
                'name' => 'Luis Miguel',
                'email' => 'mitomgg13@gmail.com',
                'password' => $password,
            ],
        ];

        DB::table('users')->insert($users);
        //
    }
}
