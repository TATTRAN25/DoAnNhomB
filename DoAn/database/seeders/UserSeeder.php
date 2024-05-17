<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use function Laravel\Prompts\table;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'user_name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
            'is_admin' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'user_name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password456'),
            'is_admin' => 0,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
            
 DB::table('users')->insert([
            'user_name' => 'admin123',
            'email' => 'admin123@gmail.com',
            'email_verified_at' => date_create(datetime:now()),
            'password' => Hash::make('123456'),
            'is_admin' => '1',
            'remember_token' => Str::random(10),
            'created_at' => date_create(datetime:now()),
            'updated_at' => date_create(datetime:now())
        ]);
    }
}
