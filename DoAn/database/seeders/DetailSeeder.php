<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_details')->insert([
            'user_id' => '1',
            'date_of_birth' => date_create(datetime:now()),
            'address' => '12/34 street ABC',
            'phone_number' => '0123456789',
            'user_image' => 'default.jpg',
            'full_name' => 'Admin',
            'created_at' => date_create(datetime:now()),
            'updated_at' => date_create(datetime:now())
        ]);
    }
}
