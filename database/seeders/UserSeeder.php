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
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => 'admin123',
                'role_id' => 1 // Admin
            ],
            [
                'name' => 'Ridwan',
                'email' => 'ridwan@idn.ac.id',
                'password' => 'admin123',
                'role_id' => 2 // Mahasiswa
            ],
            [
                'name' => 'Miko',
                'email' => 'mico@idn.ac.id',
                'password' => 'admin123',
                'role_id' => 3 // Mentor
            ],
        ]);
    }
}
