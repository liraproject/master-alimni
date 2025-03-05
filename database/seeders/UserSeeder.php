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
                'fullname' => 'Admin User',
                'email' => 'admin',
                'password' => bcrypt('123456'),
                'verification_code' => '123451',
                'is_verified' => true,
                'role_id' => 1,
            ],
            [
                'fullname' => 'Student 1',
                'email' => 'student',
                'password' => bcrypt('123456'),
                'verification_code' => '123452',
                'is_verified' => true,
                'role_id' => 2,
            ],
            [
                'fullname' => 'Student 2',
                'email' => 'student2',
                'password' => bcrypt('123456'),
                'verification_code' => '123453',
                'is_verified' => true,
                'role_id' => 2,
            ],
            [
                'fullname' => 'Teacher 1',
                'email' => 'teacher',
                'password' => bcrypt('123456'),
                'verification_code' => '123454',
                'is_verified' => true,
                'role_id' => 3,
            ],
            [
                'fullname' => 'Teacher 2',
                'email' => 'teacher2',
                'password' => bcrypt('123456'),
                'verification_code' => '123455',
                'is_verified' => true,
                'role_id' => 3,
            ],
        ]);
    }
}
