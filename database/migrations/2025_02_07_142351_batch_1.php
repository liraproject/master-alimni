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
        Schema::create('job_careers', function (Blueprint $table) {
            $table->id();
            $table->string('job_career_name');
            $table->timestamps();
        });

        Schema::create('phone_codes', function (Blueprint $table) {
            $table->id();
            $table->string('country_name');
            $table->string('code');
        });

        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('province_name');
        });

        Schema::create('regencies', function (Blueprint $table) {
            $table->id();
            $table->string('regency_name');
            $table->foreignId('province_id')->constrained('provinces');
        });

        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('district_name');
            $table->foreignId('regency_id')->constrained('regencies');
        });

        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->decimal('base_price', 8, 2)->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->integer('max_student_in_class')->nullable();
            $table->integer('max_sessions')->nullable();
            $table->enum('status', ['open', 'close']);
            $table->string('tone_color')->nullable();
            $table->timestamps();
        });

        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('email');
        //     $table->string('password');
        //     $table->enum('role', ['student', 'pengajar', 'admin']);
        //     $table->timestamps();
        // });

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('full_name');
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->string('email');
            $table->string('number_wa')->nullable();
            $table->string('photo')->nullable();
            $table->date('birth_date')->nullable();
            $table->foreignId('province_id')->nullable()->constrained('provinces');
            $table->foreignId('regency_id')->nullable()->constrained('regencies');
            $table->foreignId('district_id')->nullable()->constrained('districts');
            $table->text('address')->nullable();
            $table->string('job_id')->nullable()->constrained('job_careers');
            $table->timestamps();
        });

        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('program_id')->constrained('programs');
            $table->string('full_name');
            $table->string('photo')->nullable();
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->string('email');
            $table->string('number_wa')->nullable();
            $table->integer('total_student')->nullable();
            $table->integer('max_total_student')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_name')->nullable();
            $table->enum('status', ['active', 'rest', 'resign', 'fired']);
            $table->string('tone_color')->nullable();
            $table->float('rating')->nullable();
            $table->timestamps();
        });

        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->nullable();
            $table->foreignId('program_id')->constrained('programs');
            $table->string('content');
            $table->enum('file_type', ['Pdf', 'Video', 'Audio']);
            $table->string('link')->nullable();
            $table->string('tone_color')->nullable();
            $table->timestamps();
        });

        Schema::create('level_competencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs');
            $table->foreignId('lesson_id')->constrained('lessons');
            $table->integer('level');
            $table->timestamps();
        });

        Schema::create('limit_teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->integer('max_student')->nullable();
            $table->timestamps();
        });

        Schema::create('sertifikasi_pengajar', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('lembaga')->nullable();
            $table->string('tgl_pelaksanaan')->nullable();
            $table->string('tgl_exp')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });

        Schema::create('skill_set_pengajar', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs');
            $table->foreignId('teacher_id')->nullable()->constrained('teachers');
            $table->string('name_class');
            $table->string('descripstion')->nullable();
            $table->enum('status', ['Open', 'Close']);
            $table->timestamps();
        });

        Schema::create('batch', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs');
            $table->string('nama');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });

        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->string('link_wa');
            $table->enum('day', [1, 2, 3, 4, 5, 6, 7]);
            $table->time('time');
            $table->enum('status', ['Open', 'Close']);
            $table->timestamps();
        });

        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('batch_id')->constrained('batch');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->integer('level');
            $table->timestamp('expired_date')->nullable();
            $table->enum('registration_type', ['New', 'Renewal', 'Come Back']);
            $table->integer('amount_pay');
            $table->integer('program_price');
            $table->string('evidence');
            $table->enum('payment_status', ['Pending', 'Confirmed', 'Done', 'Invalid', 'Cancel']);
            $table->enum('verification_status', ['Verified', 'Waiting', 'Error']);
            $table->timestamps();
        });

        Schema::create('student_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained('registrations');
            $table->foreignId('batch_id')->constrained('batch');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('schedule_id')->constrained('schedules');
            $table->timestamps();
        });

        Schema::create('schedule_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained('registrations');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('schedule_id')->constrained('schedules');
            $table->enum('status', ['Approve', 'Process', 'Reject']);
            $table->string('reject_msg');
            $table->timestamps();
        });

        Schema::create('tahsin_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('schedule_id')->constrained('schedules');
            $table->foreignId('batch_id')->constrained('batch');
            $table->foreignId('lesson_id')->constrained('lessons');
            $table->string('comment');
            $table->float('rating');
            $table->string('note');
            $table->integer('mistake');
            $table->integer('score');
            $table->timestamps();
        });

        Schema::create('tahfidz_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('schedule_id')->constrained('schedules');
            $table->foreignId('batch_id')->constrained('batch');
            $table->string('note');
            $table->string('comment');
            $table->float('rating');
            $table->integer('juz')->nullable();
            $table->string('start_suroh')->nullable();
            $table->string('end_suroh')->nullable();
            $table->integer('start_verse')->nullable();
            $table->integer('end_verse')->nullable();
            $table->integer('row')->nullable();
            $table->integer('week')->nullable();
            $table->integer('mount')->nullable();
            $table->integer('year')->nullable();
            $table->timestamps();
        });

        Schema::create('log_akses_lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('lesson_id')->constrained('lessons');
            $table->float('rating');
            $table->timestamp('tanggal_akses')->nullable();
        });

        Schema::create('log_ziyadah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->date('tanggal_setoran');
            $table->integer('nilai_tahfidz');
            $table->integer('nilai_tahsin');
            $table->integer('ketuk_tuntun');
            $table->integer('kesalahan');
            $table->text('feedback');
            $table->timestamps();
        });

        Schema::create('ujian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->enum('jenis', ['Kenaikan_juz', 'Kenaikan_level']);
            $table->enum('status', ['Certified', 'Uncertified']);
            $table->integer('nilai');
            $table->date('tanggal_ujian');
            $table->timestamps();
        });

        Schema::create('payroll', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('batch_id')->constrained('batch');
            $table->decimal('total_gaji', 8, 2);
            $table->string('bukti_transfer');
            $table->enum('status', ['pending', 'paid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_careers');
        Schema::dropIfExists('phone_codes');
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('regencies');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('programs');
        Schema::dropIfExists('students');
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('level_competencies');
        Schema::dropIfExists('limit_teachers');
        Schema::dropIfExists('sertifikasi_pengajar');
        Schema::dropIfExists('skill_set_pengajar');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('batch');
        Schema::dropIfExists('schedules');
        Schema::dropIfExists('registrations');
        Schema::dropIfExists('student_schedules');
        Schema::dropIfExists('schedule_requests');
        Schema::dropIfExists('tahsin_sessions');
        Schema::dropIfExists('tahfidz_sessions');
        Schema::dropIfExists('log_akses_lessons');
        Schema::dropIfExists('log_ziyadah');
        Schema::dropIfExists('ujian');
        Schema::dropIfExists('payroll');
    }
};
