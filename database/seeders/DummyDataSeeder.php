<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Master Data
        // DB::table('program_categories')->insert([
        //     [
        //         'category_name' => 'Tahsin',
        //         'description' => 'Program untuk membantu anda membaca Al-Qur\'an dengan lancar dan tepat sesuai tajwid dan makhraj yang benar',
        //         'tone_color' => '#36B611',
        //     ],
        //     [
        //         'category_name' => 'Tahfidz',
        //         'description' => 'Program menghafal Al-Qur\'an dengan metode terstruktur, membantu anda untuk menjaga hafalan dan menjadi teman anda untuk menghafal 30 juz',
        //         'tone_color' => '#116FB6',
        //     ],
        //     [
        //         'category_name' => 'Tilawah',
        //         'description' => 'Program ini fokus pada penguasaan dalam melantunkan ayat-ayat Al-Qur\'an dengan indah dan benar',
        //         'tone_color' => '#BE1CB6',
        //     ],
        //     [
        //         'category_name' => 'Bahasa Arab',
        //         'description' => 'Segera Hadir! Program pembelajaran Bahasa Arab untuk memahami Al-Qur\'an dan percakapan sehari-hari',
        //         'tone_color' => '#E11D1D',
        //     ]
        // ]);

        DB::table('programs')->insert([
            ['program_category_id' => 1, 'program_name' => 'Tahsin Reguler', 'description' => 'Program Reguler', 'base_price' => 110000, 'base_sallary' => 110000, 'price' => 110000, 'max_student_in_class' => 20, 'max_sessions' => 2, 'is_open' => true, 'tone_color' => '#95D2B3'],
            ['program_category_id' => 1, 'program_name' => 'Tahsin Premium', 'description' => 'Program Premium', 'base_price' => 150000, 'base_sallary' => 150000, 'price' => 150000, 'max_student_in_class' => 15, 'max_sessions' => 3, 'is_open' => true, 'tone_color' => '#7FBF9B'],
            ['program_category_id' => 1, 'program_name' => 'Tahsin Expert', 'description' => 'Program Expert', 'base_price' => 190000, 'base_sallary' => 190000, 'price' => 190000, 'max_student_in_class' => 10, 'max_sessions' => 4, 'is_open' => true, 'tone_color' => '#6AAE84'],
            ['program_category_id' => 1, 'program_name' => 'Tahsin Eksekutif', 'description' => 'Program Eksekutif', 'base_price' => 250000, 'base_sallary' => 250000, 'price' => 250000, 'max_student_in_class' => 5, 'max_sessions' => 5, 'is_open' => true, 'tone_color' => '#559C6D'],
            ['program_category_id' => 2, 'program_name' => 'Tahfidz Reguler', 'description' => 'Program Reguler', 'base_price' => 110000, 'base_sallary' => 110000, 'price' => 110000, 'max_student_in_class' => 20, 'max_sessions' => 2, 'is_open' => true, 'tone_color' => '#A6B37D'],
            ['program_category_id' => 2, 'program_name' => 'Tahfidz Premium', 'description' => 'Program Premium', 'base_price' => 150000, 'base_sallary' => 150000, 'price' => 150000, 'max_student_in_class' => 15, 'max_sessions' => 3, 'is_open' => true, 'tone_color' => '#8F9E6A'],
            ['program_category_id' => 2, 'program_name' => 'Tahfidz Expert', 'description' => 'Program Expert', 'base_price' => 190000, 'base_sallary' => 190000, 'price' => 190000, 'max_student_in_class' => 10, 'max_sessions' => 4, 'is_open' => true, 'tone_color' => '#788957'],
            ['program_category_id' => 2, 'program_name' => 'Tahfidz Eksekutif', 'description' => 'Program Eksekutif', 'base_price' => 250000, 'base_sallary' => 250000, 'price' => 250000, 'max_student_in_class' => 5, 'max_sessions' => 5, 'is_open' => true, 'tone_color' => '#627444'],
        ]);
        DB::table('batches')->insert([
            ['batch_name' => 'Batch 1', 'early_date' => '2025-06-01 00:00:00', 'start_date' => '2025-06-15 00:00:00', 'end_date' => '2025-06-28 23:59:59'],
        ]);
        DB::table('jobs')->insert([
            ['job_name' => 'Engineer'],
            ['job_name' => 'Doctor'],
            ['job_name' => 'Teacher'],
            ['job_name' => 'Lawyer'],
            ['job_name' => 'Akuntan'],
            ['job_name' => 'Arsitek'],
            ['job_name' => 'Koki'],
            ['job_name' => 'Dokter Gigi'],
            ['job_name' => 'Tukang Listrik'],
            ['job_name' => 'Petani'],
            ['job_name' => 'Desainer Grafis'],
            ['job_name' => 'Jurnalis'],
            ['job_name' => 'Mekanik'],
            ['job_name' => 'Perawat'],
            ['job_name' => 'Apoteker'],
            ['job_name' => 'Fotografer'],
            ['job_name' => 'Pilot'],
            ['job_name' => 'Tukang Ledeng'],
            ['job_name' => 'Polisi'],
            ['job_name' => 'Pengembang Perangkat Lunak'],
        ]);
        DB::table('phone_codes')->insert([
            ['country_name' => 'Australia', 'code' => '+61'],
            ['country_name' => 'Brazil', 'code' => '+55'],
            ['country_name' => 'Canada', 'code' => '+1'],
            ['country_name' => 'China', 'code' => '+86'],
            ['country_name' => 'Denmark', 'code' => '+45'],
            ['country_name' => 'France', 'code' => '+33'],
            ['country_name' => 'Germany', 'code' => '+49'],
            ['country_name' => 'India', 'code' => '+91'],
            ['country_name' => 'Indonesia', 'code' => '+62'],
            ['country_name' => 'Italy', 'code' => '+39'],
            ['country_name' => 'Japan', 'code' => '+81'],
            ['country_name' => 'Malaysia', 'code' => '+60'],
            ['country_name' => 'Mexico', 'code' => '+52'],
            ['country_name' => 'Netherlands', 'code' => '+31'],
            ['country_name' => 'Norway', 'code' => '+47'],
            ['country_name' => 'Russia', 'code' => '+7'],
            ['country_name' => 'Saudi Arabia', 'code' => '+966'],
            ['country_name' => 'Singapore', 'code' => '+65'],
            ['country_name' => 'South Africa', 'code' => '+27'],
            ['country_name' => 'South Korea', 'code' => '+82'],
            ['country_name' => 'Spain', 'code' => '+34'],
            ['country_name' => 'Sweden', 'code' => '+46'],
            ['country_name' => 'Switzerland', 'code' => '+41'],
            ['country_name' => 'Turkey', 'code' => '+90'],
            ['country_name' => 'United Kingdom', 'code' => '+44'],
            ['country_name' => 'United States', 'code' => '+1'],
        ]);
        DB::table('provinces')->insert([
            ['province_name' => 'Aceh'],
            ['province_name' => 'Sumatera Utara'],
            ['province_name' => 'Sumatera Barat'],
            ['province_name' => 'Riau'],
            ['province_name' => 'Kepulauan Riau'],
            ['province_name' => 'Jambi'],
            ['province_name' => 'Sumatera Selatan'],
            ['province_name' => 'Bengkulu'],
            ['province_name' => 'Lampung'],
            ['province_name' => 'Kepulauan Bangka Belitung'],
            ['province_name' => 'Banten'],
            ['province_name' => 'DKI Jakarta'],
            ['province_name' => 'Jawa Barat'],
            ['province_name' => 'Jawa Tengah'],
            ['province_name' => 'Yogyakarta'],
            ['province_name' => 'Jawa Timur'],
            ['province_name' => 'Bali'],
            ['province_name' => 'Nusa Tenggara Barat'],
            ['province_name' => 'Nusa Tenggara Timur'],
            ['province_name' => 'Kalimantan Barat'],
            ['province_name' => 'Kalimantan Tengah'],
            ['province_name' => 'Kalimantan Selatan'],
            ['province_name' => 'Kalimantan Timur'],
            ['province_name' => 'Kalimantan Utara'],
            ['province_name' => 'Sulawesi Utara'],
            ['province_name' => 'Sulawesi Tengah'],
            ['province_name' => 'Sulawesi Tenggara'],
            ['province_name' => 'Sulawesi Barat'],
            ['province_name' => 'Sulawesi Selatan'],
            ['province_name' => 'Gorontalo'],
            ['province_name' => 'Maluku'],
            ['province_name' => 'Maluku Utara'],
            ['province_name' => 'Papua'],
            ['province_name' => 'Papua Barat'],
        ]);
        DB::table('regencies')->insert([
            ['province_id' => 12, 'regency_name' => 'Jakarta Pusat'],
            ['province_id' => 'ID-JB', 'regency_name' => 'Bandung'],
            ['province_id' => 'ID-JT', 'regency_name' => 'Semarang'],
        ]);
        DB::table('districts')->insert([
            ['regency_id' => 'ID-JK-01', 'district_name' => 'Gambir'],
            ['regency_id' => 'ID-JB-01', 'district_name' => 'Cicendo'],
            ['regency_id' => 'ID-JT-01', 'district_name' => 'Banyumanik'],
        ]);
        DB::table('lessons')->insert([
            ['program_id' => 1, 'level' => 1, 'order' => 1, 'content' => 'Pengenalan', 'upload_file' => null, 'file_type' => 'Pdf', 'link' => null],
            ['program_id' => 1, 'level' => 1, 'order' => 2, 'content' => 'Tahsin Al-Fatihah', 'upload_file' => null, 'file_type' => 'Pdf', 'link' => null],
            ['program_id' => 1, 'level' => 1, 'order' => 3, 'content' => 'Pendalaman Makhraj', 'upload_file' => null, 'file_type' => 'Pdf', 'link' => null],
            ['program_id' => 1, 'level' => 1, 'order' => 4, 'content' => 'Tajwid', 'upload_file' => null, 'file_type' => 'Pdf', 'link' => null],
            ['program_id' => 1, 'level' => 1, 'order' => 5, 'content' => 'Pendalaman', 'upload_file' => null, 'file_type' => 'Pdf', 'link' => null],
        ]);
        DB::table('level_competencies')->insert([
            ['level' => 1, 'program_id' => 1, 'lesson_id' => 1],
            ['level' => 2, 'program_id' => 1, 'lesson_id' => 2],
            ['level' => 3, 'program_id' => 1, 'lesson_id' => 3],
            ['level' => 4, 'program_id' => 1, 'lesson_id' => 4],
            ['level' => 5, 'program_id' => 1, 'lesson_id' => 5],
        ]);
        DB::table('level_tahfidz')->insert([
            ['level' => 1, 'limit_juz' => 5, 'detail_juz' => 'Juz 1-5'],
            ['level' => 2, 'limit_juz' => 10, 'detail_juz' => 'Juz 6-10'],
            ['level' => 3, 'limit_juz' => 15, 'detail_juz' => 'Juz 11-15'],
            ['level' => 4, 'limit_juz' => 20, 'detail_juz' => 'Juz 16-20'],
            ['level' => 5, 'limit_juz' => 30, 'detail_juz' => 'Juz 21-30'],
        ]);

        // Master Data Kelas
        DB::table('classes')->insert([
        ]);
        DB::table('schedules')->insert([
        ]);

        // Master Data Bank Soal
        DB::table('questions')->insert([
            // buat 20 soal tahsin
        ]);
        DB::table('answers')->insert([
        ]);
        DB::table('exam_packages')->insert([
        ]);
        DB::table('exam_questions')->insert([
        ]);
        DB::table('exam_results')->insert([
        ]);
        DB::table('exam_reports')->insert([
        ]);

        // Data untuk User Student
        DB::table('students')->insert([
        ]);
        DB::table('registrations')->insert([
        ]);
        DB::table('student_schedules')->insert([
        ]);
        DB::table('lesson_access_logs')->insert([
        ]);
        DB::table('tahsin_sessions')->insert([
        ]);
        DB::table('tahfidz_sessions')->insert([
        ]);
        DB::table('quran_recapitulations')->insert([
        ]);
        DB::table('juz_recapitulations')->insert([
        ]);
        DB::table('juz_exams')->insert([
        ]);
        DB::table('level_recapitulations')->insert([
        ]);
        DB::table('tahfidz_level_exams')->insert([
        ]);
        DB::table('tahsin_level_exams')->insert([
        ]);

        // Data untuk User Teacher
        DB::table('teachers')->insert([
        ]);
        DB::table('program_teacher')->insert([
        ]);
        DB::table('limit_teachers')->insert([
        ]);
        DB::table('teacher_certificates')->insert([
        ]);
        DB::table('teacher_skills')->insert([
        ]);
        DB::table('teacher_absents')->insert([
        ]);
        DB::table('allowances')->insert([
        ]);
        DB::table('bonuses')->insert([
        ]);
        DB::table('teacher_allowances')->insert([
        ]);
        DB::table('payrolls')->insert([
        ]);
        DB::table('payroll_base_salaries')->insert([
        ]);
        DB::table('payroll_bonuses')->insert([
        ]);
        DB::table('payroll_allowances')->insert([
        ]);
        DB::table('bonus_requests')->insert([
        ]);
        DB::table('')->insert([
        ]);
        DB::table('')->insert([
        ]);
        DB::table('')->insert([
        ]);
        DB::table('')->insert([
        ]);
        DB::table('')->insert([
        ]);
        DB::table('')->insert([
        ]);
        DB::table('')->insert([
        ]);
        DB::table('')->insert([
        ]);
        DB::table('')->insert([
        ]);
    }
}
