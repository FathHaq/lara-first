<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['role_name' => 'Admin'], // 1
            ['role_name' => 'Mahasiswa'], // 2
            ['role_name' => 'Mentor'], // 3
        ]);
    }
}
