<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('description');
            $table->float('base_price');
            $table->float('base_sallary');
            $table->float('price');
            $table->integer('max_student_in_class');
            $table->integer('max_sessions');
            $table->boolean('is_open')->default(true);
            $table->string('tone_color');
            $table->timestamps();
        });

        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('batch_name');
            $table->dateTime('early_date');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();
        });

        // Schema::create('roles', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('role_name');
        //     $table->string('access', 255);
        //     $table->timestamps();
        // });

        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('email')->unique();
        //     $table->string('password');
        //     $table->string('fullname', 255);
        //     $table->foreignId('role_id')->constrained('roles');
        //     $table->string('photo', 255)->nullable();
        //     $table->string('verification_code', 255)->unique();
        //     $table->boolean('is_verified');
        //     $table->timestamp('verified_at')->default(now());
        //     $table->timestamp('last_seen')->default(now());
        //     $table->timestamps();
        // });

        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_name');
            $table->timestamps();
        });

        Schema::create('phone_codes', function (Blueprint $table) {
            $table->id();
            $table->string('country_name');
            $table->string('code');
        });

        Schema::create('provinces', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('province_name');
        });

        Schema::create('regencies', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('province_id', 20);
            $table->string('regency_name');
            $table->foreign('province_id')->references('id')->on('provinces');
        });

        Schema::create('districts', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('regency_id', 20);
            $table->string('district_name');
            $table->foreign('regency_id')->references('id')->on('regencies');
        });

        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs');
            $table->integer('level');
            $table->integer('order');
            $table->string('content');
            $table->string('upload_file')->nullable();
            $table->enum('file_type', ['Pdf', 'Video', 'Audio'])->default('Pdf');
            $table->string('link')->nullable();
            $table->timestamps();
        });

        Schema::create('level_competencies', function (Blueprint $table) {
            $table->id();
            $table->integer('level');
            $table->foreignId('program_id')->constrained('programs');
            $table->foreignId('lesson_id')->constrained('lessons');
            $table->timestamps();
        });

        Schema::create('level_tahfidz', function (Blueprint $table) {
            $table->id();
            $table->integer('level');
            $table->integer('limit_juz');
            $table->string('detail_juz', 255);
            $table->timestamps();
        });

        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('teacher_code', 255)->nullable();
            $table->string('teacher_name');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('email');
            $table->string('address', 500);
            $table->string('wa_number');
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('account_name');
            $table->enum('status', ['Aktif', 'Cuti', 'Mengundurkan Diri', 'Dikeluarkan', 'Dihapus']);
            $table->string('tone_color');
            $table->float('rating')->default(0);
            $table->timestamps();
        });

        Schema::create('program_teacher', function (Blueprint $table) {
            $table->foreignId('program_id')->constrained('programs');
            $table->foreignId('teacher_id')->constrained('teachers');
        });

        Schema::create('limit_teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->integer('max_student');
            $table->timestamps();
        });

        Schema::create('teacher_certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->string('certificate_name');
            $table->string('file');
            $table->timestamps();
        });

        Schema::create('teacher_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->string('skill_name');
            $table->timestamps();
        });

        Schema::create('teacher_absents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('batch_id')->constrained('batches');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('absent_type', ['Izin', 'Sakit']);
            $table->string('note', 1000);
            $table->string('attachment', 255)->nullable();
            $table->enum('status', ['Diterima', 'Proses', 'Ditolak']);
            $table->timestamps();
        });

        Schema::create('allowances', function (Blueprint $table) {
            $table->id();
            $table->string('allowance_name', 255);
            $table->float('amount');
            $table->timestamps();
        });

        Schema::create('bonuses', function (Blueprint $table) {
            $table->id();
            $table->string('bonus_name', 255);
            $table->float('amount');
            $table->timestamps();
        });

        Schema::create('teacher_allowances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('allowance_id')->constrained('allowances');
            $table->timestamps();
        });

        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('batch_id')->constrained('batches');
            $table->integer('session_absent');
            $table->float('sallary');
            $table->float('deduction');
            $table->float('takehome_pay');
            $table->boolean('is_paid')->default(false);
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });

        Schema::create('payroll_base_salaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id')->constrained('batches');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('program_id')->constrained('programs');
            $table->integer('total_student');
            $table->float('base_sallary');
            $table->timestamps();
        });

        Schema::create('payroll_bonuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id')->constrained('batches');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->string('bonus_name', 255);
            $table->float('amount');
            $table->timestamps();
        });

        Schema::create('payroll_allowances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id')->constrained('batches');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->string('allowance_name', 255);
            $table->float('amount');
            $table->timestamps();
        });

        Schema::create('bonus_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('bonus_id');
            $table->foreignId('batch_id')->constrained('batches');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->string('description', 1000);
            $table->enum('status', ['Diterima', 'Proses', 'Ditolak']);
            $table->timestamps();
        });

        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->string('class_name');
            $table->string('link_wa');
            $table->boolean('is_open')->default(true);
            $table->timestamps();
        });

        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('program_id')->constrained('programs');
            $table->enum('day', ['1', '2', '3', '4', '5', '6', '7']);
            $table->time('time');
            $table->boolean('is_open')->default(true);
            $table->timestamps();
        });

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('student_name');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->string('email');
            $table->string('phone');
            $table->date('birth_date');
            $table->string('birth_place', 255);
            $table->integer('province_id');
            $table->integer('regency_id');
            $table->integer('district_id');
            $table->string('address', 1000);
            $table->integer('job_id');
            $table->timestamps();
        });

        Schema::create('phone_change_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->string('new_phone', 255);
            $table->string('verification_code', 255)->unique()->comment('Unique ID yg akan dikirim ke user');
            $table->boolean('is_verified')->default(false);
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
        });

        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('batch_id')->constrained('batches');
            $table->foreignId('program_id')->constrained('programs');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->integer('max_session');
            $table->integer('level');
            $table->enum('registration_type', ['New', 'Renewal', 'Come Back']);
            $table->float('amount_pay');
            $table->float('program_price');
            $table->enum('payment_status', ['Proses', 'Konfirmasi', 'Selesai', 'Tidak Valid', 'Batal']);
            $table->timestamp('payment_expired_date')->nullable();
            $table->string('attachment')->nullable();
            $table->enum('verification_status', ['Verifikasi', 'Menunggu', 'Error']);
            $table->timestamps();
        });

        Schema::create('student_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained('registrations');
            $table->foreignId('batch_id')->constrained('batches');
            $table->enum('day', ['1', '2', '3', '4', '5', '6', '7']);
            $table->time('time');
            $table->timestamps();
        });

        Schema::create('lesson_access_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('program_id')->constrained('programs');
            $table->integer('lesson_id');
            $table->boolean('is_read')->default(false);
            $table->boolean('is_learned')->default(false);
            $table->timestamps();
        });

        Schema::create('tahsin_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('schedule_id')->constrained('schedules');
            $table->foreignId('batch_id')->constrained('batches');
            $table->integer('lesson_id');
            $table->integer('level');
            $table->string('comment', 5000)->nullable();
            $table->float('rating')->nullable();
            $table->integer('mistake')->nullable();
            $table->float('score')->nullable();
            $table->string('predicate', 255)->nullable();
            $table->enum('absent_type', ['Hadir', 'Alpha', 'Sakit', 'Izin'])->default('Hadir');
            $table->string('note', 5000)->nullable();
            $table->timestamps();
        });

        Schema::create('tahfidz_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('schedule_id')->constrained('schedules');
            $table->foreignId('batch_id')->constrained('batches');
            $table->integer('level');
            $table->string('note')->nullable();
            $table->string('comment')->nullable();
            $table->float('rating')->nullable();
            $table->integer('juz')->nullable();
            $table->string('start_letter')->nullable();
            $table->string('end_letter')->nullable();
            $table->integer('start_verse')->nullable();
            $table->integer('end_verse')->nullable();
            $table->integer('row')->nullable();
            $table->integer('tap')->default(0);
            $table->integer('guide')->default(0);
            $table->float('score')->default(100);
            $table->string('predicate', 255)->nullable();
            $table->enum('absent_type', ['Hadir', 'Alpha', 'Sakit', 'Izin'])->default('Hadir');
            $table->timestamps();
        });

        Schema::create('quran_recapitulations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->integer('active_juz')->default(30);
            $table->integer('total_row')->default(0);
            $table->integer('real_row')->default(0);
            $table->integer('real_page')->default(0);
            $table->integer('real_juz')->default(0);
            $table->timestamps();
        });

        Schema::create('juz_recapitulations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->integer('juz')->default(30);
            $table->integer('total_row')->default(0);
            $table->boolean('is_certified')->default(false);
            $table->timestamps();
        });

        Schema::create('juz_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id')->constrained('batches');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->integer('juz');
            $table->integer('tap');
            $table->integer('guide');
            $table->float('score');
            $table->string('predicate', 255)->nullable();
            $table->string('note', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('level_recapitulations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('program_id')->constrained('programs');
            $table->integer('level');
            $table->boolean('is_certified')->default(false);
            $table->timestamps();
        });

        Schema::create('tahfidz_level_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id')->constrained('batches');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->integer('level');
            $table->integer('tap')->default(0);
            $table->integer('guide')->default(0);
            $table->integer('fail')->default(0);
            $table->float('score');
            $table->string('predicate', 255)->nullable();
            $table->string('note', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('tahsin_level_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id')->constrained('batches');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->integer('level');
            $table->integer('mistake')->default(0);
            $table->float('score');
            $table->string('predicate', 255)->nullable();
            $table->string('note', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs');
            $table->string('question_name', 1000);
            $table->enum('question_type', ['Multiple Choice', 'Checkbox', 'Essay']);
            $table->float('poin');
            $table->timestamps();
        });

        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('questions');
            $table->string('answer_choice', 255);
            $table->boolean('is_true')->default(false);
            $table->timestamps();
        });

        Schema::create('exam_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs');
            $table->string('exam_name', 500);
            $table->string('exam_description', 500);
            $table->float('pass_score');
            $table->timestamps();
        });

        Schema::create('exam_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_package_id')->constrained('exam_packages');
            $table->foreignId('question_id')->constrained('questions');
            $table->float('real_poin');
            $table->timestamps();
        });

        Schema::create('exam_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('program_id')->constrained('programs');
            $table->foreignId('exam_package_id')->constrained('exam_packages');
            $table->string('question', 500);
            $table->string('answer', 100);
            $table->float('poin');
            $table->boolean('is_true')->default(false);
            $table->timestamps();
        });

        Schema::create('exam_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_package_id')->constrained('exam_packages');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('program_id')->constrained('programs');
            $table->integer('level')->nullable();
            $table->float('score');
            $table->string('predicate', 255)->nullable();
            $table->boolean('is_passed')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_reports');
        Schema::dropIfExists('exam_results');
        Schema::dropIfExists('exam_questions');
        Schema::dropIfExists('exam_packages');
        Schema::dropIfExists('answers');
        Schema::dropIfExists('questions');
        Schema::dropIfExists('tahsin_level_exams');
        Schema::dropIfExists('tahfidz_level_exams');
        Schema::dropIfExists('level_recapitulations');
        Schema::dropIfExists('juz_exams');
        Schema::dropIfExists('juz_recapitulations');
        Schema::dropIfExists('quran_recapitulations');
        Schema::dropIfExists('tahfidz_sessions');
        Schema::dropIfExists('tahsin_sessions');
        Schema::dropIfExists('lesson_access_logs');
        Schema::dropIfExists('student_schedules');
        Schema::dropIfExists('registrations');
        Schema::dropIfExists('phone_change_requests');
        Schema::dropIfExists('students');
        Schema::dropIfExists('schedules');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('bonus_requests');
        Schema::dropIfExists('payroll_allowances');
        Schema::dropIfExists('payroll_bonuses');
        Schema::dropIfExists('payroll_base_salaries');
        Schema::dropIfExists('payrolls');
        Schema::dropIfExists('program_teacher');
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('limit_teachers');
        Schema::dropIfExists('teacher_certificates');
        Schema::dropIfExists('teacher_skills');
        Schema::dropIfExists('teacher_absents');
        Schema::dropIfExists('allowances');
        Schema::dropIfExists('bonuses');
        Schema::dropIfExists('teacher_allowances');
        Schema::dropIfExists('level_tahfidz');
        Schema::dropIfExists('level_competencies');
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('regencies');
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('phone_codes');
        Schema::dropIfExists('jobs');
        // Schema::dropIfExists('users');
        // Schema::dropIfExists('roles');
        Schema::dropIfExists('batches');
        Schema::dropIfExists('programs');
    }
};
