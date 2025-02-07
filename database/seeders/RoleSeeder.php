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
                'name' => 'admin',
                'description' => 'Administrator'
            ],
            [
                'name' => 'student',
                'description' => 'Student User'
            ],
            [
                'name' => 'teacher',
                'description' => 'Teacher User'
            ],
        ]);
    }
}
