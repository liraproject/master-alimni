<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherDummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
            ['id' => 1, 'user_id' => 3, 'teacher_code' => 'T001', 'teacher_name' => 'Ahmad Fauzi', 'gender' => 'Laki-Laki', 'birth_date' => '1985-05-10', 'birth_place' => 'Jakarta', 'email' => 'ahmad@example.com', 'address' => 'Jl. Merdeka No. 1', 'wa_number' => '081234567890', 'bank_name' => 'BNI', 'account_number' => '1234567890', 'account_name' => 'Ahmad Fauzi', 'status' => 'Aktif', 'tone_color' => '#ff5733', 'rating' => 4.5],
            ['id' => 2, 'user_id' => 4, 'teacher_code' => 'T002', 'teacher_name' => 'Siti Nurhaliza', 'gender' => 'Perempuan', 'birth_date' => '1990-07-15', 'birth_place' => 'Bandung', 'email' => 'siti@example.com', 'address' => 'Jl. Asia Afrika No. 2', 'wa_number' => '082345678901', 'bank_name' => 'BRI', 'account_number' => '2345678901', 'account_name' => 'Siti Nurhaliza', 'status' => 'Aktif', 'tone_color' => '#33ff57', 'rating' => 4.7],
        ]);

        DB::table('teacher_certificates')->insert([
            ['teacher_id' => 1, 'certificate_name' => 'Pendidikan Profesi Guru', 'file' => 'ppg_ahmad.pdf', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 1, 'certificate_name' => 'Sertifikasi Bahasa Inggris', 'file' => 'sertifikat_siti.pdf', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 1, 'certificate_name' => 'Sertifikasi Pelajar', 'file' => 'ppg_ahmad.pdf', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 1, 'certificate_name' => 'Sertifikasi IPA', 'file' => 'sertifikat_siti.pdf', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 2, 'certificate_name' => 'Sertifikasi Matematika', 'file' => 'sertifikat_budi.pdf', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 2, 'certificate_name' => 'Sertifikasi IPA', 'file' => 'sertifikat_dewi.pdf', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 2, 'certificate_name' => 'Sertifikasi Matematika', 'file' => 'sertifikat_budi.pdf', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 2, 'certificate_name' => 'Sertifikasi IPA', 'file' => 'sertifikat_dewi.pdf', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('teacher_skills')->insert([
            ['teacher_id' => 1, 'skill_name' => 'Matematika', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 1, 'skill_name' => 'Bahasa Inggris', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 1, 'skill_name' => 'Bahasa Arab', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 1, 'skill_name' => 'Kimia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 2, 'skill_name' => 'Fisika', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 2, 'skill_name' => 'Kimia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 2, 'skill_name' => 'Bahasa Arab', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 2, 'skill_name' => 'Kimia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
