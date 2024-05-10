<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'phone_number' => '0123456789',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 1,
            'user_name' => 'admin',
        ]);

        DB::table('users')->insert([
            'phone_number' => '0123456789',
            'email' => 'example@example.com',
            'password' => bcrypt('password'),
            'is_admin' => 1,
            'user_name' => 'admin',
        ]);
    }
}
