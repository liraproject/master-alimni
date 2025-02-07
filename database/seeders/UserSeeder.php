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
                'name' => 'Admin User',
                'email' => 'admin',
                'password' => bcrypt('123456'),
                'role_id' => 1,
            ],
            [
                'name' => 'Student 1',
                'email' => 'student',
                'password' => bcrypt('123456'),
                'role_id' => 2,
            ],
            [
                'name' => 'Student 2',
                'email' => 'student2',
                'password' => bcrypt('123456'),
                'role_id' => 2,
            ],
            [
                'name' => 'Teacher 1',
                'email' => 'teacher',
                'password' => bcrypt('123456'),
                'role_id' => 3,
            ],
            [
                'name' => 'Teacher 2',
                'email' => 'teacher2',
                'password' => bcrypt('123456'),
                'role_id' => 3,
            ],
        ]);
    }
}
