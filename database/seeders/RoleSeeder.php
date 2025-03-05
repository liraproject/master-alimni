<?php

namespace Database\Seeders;

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
            [
                'role_name' => 'admin',
                'access' => 'Administrator'
            ],
            [
                'role_name' => 'student',
                'access' => 'Student User'
            ],
            [
                'role_name' => 'teacher',
                'access' => 'Teacher User'
            ],
        ]);
    }
}
