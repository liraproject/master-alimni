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
                'email' => 'admin',
                'password' => bcrypt('123456'),
                'fullname' => 'Admin User',
                'role_id' => 1,
                'is_verified' => 1
            ],
            [
                'email' => 'student',
                'password' => bcrypt('123456'),
                'fullname' => 'Student 1',
                'role_id' => 2,
                'is_verified' => 1

            ],
            [
                'email' => 'student2',
                'password' => bcrypt('123456'),
                'fullname' => 'Student 2',
                'role_id' => 2,
                'is_verified' => 1

            ],
            [
                'email' => 'student3',
                'password' => bcrypt('123456'),
                'fullname' => 'Student 3',
                'role_id' => 2,
                'is_verified' => 1

            ],
            [
                'email' => 'teacher',
                'password' => bcrypt('123456'),
                'fullname' => 'Teacher 1',
                'role_id' => 3,
                'is_verified' => 1

            ],
            [
                'email' => 'teacher2',
                'password' => bcrypt('123456'),
                'fullname' => 'Teacher 2',
                'role_id' => 3,
                'is_verified' => 1

            ],
        ]);
    }
}
