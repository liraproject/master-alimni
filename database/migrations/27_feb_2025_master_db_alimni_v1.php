<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('allowances', function (Blueprint $table) {
            $table->integer('id', true)->unique('allowances_index_49');
            $table->string('allowance_name')->nullable();
            $table->float('amount')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->primary(['id']);
        });

        Schema::create('answers', function (Blueprint $table) {
            $table->integer('id', true)->unique('answers_index_205');
            $table->integer('question_id')->nullable()->index('answers_index_206');
            $table->string('answer_choice')->nullable();
            $table->boolean('is_true')->nullable()->default(false);
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->primary(['id']);
        });

        Schema::create('batches', function (Blueprint $table) {
            $table->integer('id', true)->unique('batches_index_89');
            $table->string('batch_name')->nullable();
            $table->dateTime('early_date')->nullable()->index('batches_index_90');
            $table->dateTime('start_date')->nullable()->index('batches_index_91');
            $table->dateTime('end_date')->nullable()->index('batches_index_92');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->primary(['id']);
        });

        Schema::create('bonus_requests', function (Blueprint $table) {
            $table->integer('id', true)->unique('bonus_requests_index_77');
            $table->integer('bonus_id')->nullable()->index('bonus_requests_index_78');
            $table->integer('batch_id')->nullable()->index('bonus_requests_index_79');
            $table->integer('teacher_id')->nullable()->index('teacher_id');
            $table->string('description', 1000)->nullable()->comment('Isi detail bonus berdasarkan apa');
            $table->enum('status', ['Diterima', 'Proses', 'Ditolak'])->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['bonus_id', 'teacher_id'], 'bonus_requests_index_80');
            $table->index(['bonus_id', 'batch_id', 'teacher_id'], 'bonus_requests_index_81');
            $table->index(['batch_id', 'teacher_id'], 'bonus_requests_index_82');
            $table->primary(['id']);
        });

        Schema::create('bonuses', function (Blueprint $table) {
            $table->integer('id', true)->unique('bonuses_index_50');
            $table->string('bonus_name')->nullable();
            $table->float('amount')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->primary(['id']);
        });

        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration');
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration');
        });

        Schema::create('classes', function (Blueprint $table) {
            $table->integer('id', true)->unique('classes_index_83');
            $table->integer('program_id')->nullable()->index('classes_index_84');
            $table->integer('teacher_id')->nullable()->index('classes_index_85');
            $table->string('class_name')->nullable();
            $table->string('link_wa')->nullable();
            $table->boolean('is_open')->nullable()->default(true)->index('classes_index_86');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['program_id', 'teacher_id'], 'classes_index_87');
            $table->index(['program_id', 'teacher_id', 'is_open'], 'classes_index_88');
            $table->primary(['id']);
        });

        Schema::create('districts', function (Blueprint $table) {
            $table->string('id', 20)->nullable()->unique('districts_index_16');
            $table->string('regency_id', 20)->nullable()->index('districts_index_17');
            $table->string('district_name')->nullable();
        });

        Schema::create('exam_packages', function (Blueprint $table) {
            $table->integer('id', true)->unique('exam_packages_index_207');
            $table->integer('program_id')->nullable()->index('exam_packages_index_208');
            $table->string('exam_name', 500)->nullable();
            $table->string('exam_description', 500)->nullable();
            $table->float('pass_score')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->primary(['id']);
        });

        Schema::create('exam_questions', function (Blueprint $table) {
            $table->integer('id', true)->unique('exam_questions_index_209');
            $table->integer('exam_package_id')->nullable()->index('exam_questions_index_210');
            $table->integer('question_id')->nullable()->index('exam_questions_index_211');
            $table->float('real_poin')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['exam_package_id', 'question_id'], 'exam_questions_index_212');
            $table->primary(['id']);
        });

        Schema::create('exam_reports', function (Blueprint $table) {
            $table->bigInteger('id', true)->unique('exam_reports_index_217');
            $table->integer('exam_package_id')->nullable()->index('exam_reports_index_218');
            $table->bigInteger('student_id')->nullable()->index('exam_reports_index_219');
            $table->integer('program_id')->nullable()->index('exam_reports_index_220');
            $table->integer('level')->nullable();
            $table->float('score')->nullable();
            $table->string('predicate')->nullable();
            $table->boolean('is_passed')->nullable()->default(true);
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['exam_package_id', 'student_id', 'program_id'], 'exam_reports_index_221');
            $table->index(['student_id', 'program_id'], 'exam_reports_index_222');
            $table->index(['exam_package_id', 'program_id'], 'exam_reports_index_223');
            $table->primary(['id']);
        });

        Schema::create('exam_results', function (Blueprint $table) {
            $table->bigInteger('id', true)->unique('exam_results_index_213');
            $table->bigInteger('student_id')->nullable()->index('exam_results_index_214');
            $table->integer('program_id')->nullable()->index('program_id');
            $table->integer('exam_package_id')->nullable()->index('exam_results_index_215');
            $table->string('question', 500)->nullable();
            $table->string('answer', 100)->nullable();
            $table->float('poin')->nullable();
            $table->boolean('is_true')->nullable()->default(false);
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['student_id', 'program_id'], 'exam_results_index_216');
            $table->primary(['id']);
        });

        Schema::create('jobs', function (Blueprint $table) {
            $table->integer('id', true)->unique('jobs_index_11');
            $table->string('job_name')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->primary(['id']);
        });

        Schema::create('juz_exams', function (Blueprint $table) {
            $table->bigInteger('id', true)->unique('juz_exams_index_180');
            $table->integer('batch_id')->nullable()->index('juz_exams_index_181');
            $table->bigInteger('student_id')->nullable()->index('juz_exams_index_183');
            $table->integer('teacher_id')->nullable()->index('juz_exams_index_182');
            $table->integer('juz')->nullable();
            $table->integer('tap')->nullable();
            $table->integer('guide')->nullable();
            $table->float('score')->nullable();
            $table->string('predicate')->nullable();
            $table->string('note')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['batch_id', 'teacher_id'], 'juz_exams_index_184');
            $table->index(['batch_id', 'student_id'], 'juz_exams_index_185');
            $table->index(['student_id', 'juz'], 'juz_exams_index_186');
            $table->primary(['id']);
        });

        Schema::create('juz_recapitulations', function (Blueprint $table) {
            $table->bigInteger('id', true)->unique('juz_recapitulations_index_176');
            $table->bigInteger('student_id')->nullable()->index('juz_recapitulations_index_177');
            $table->integer('juz')->nullable()->default(30);
            $table->integer('total_row')->nullable()->default(0);
            $table->boolean('is_certified')->nullable()->default(false)->index('juz_recapitulations_index_178');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['student_id', 'is_certified'], 'juz_recapitulations_index_179');
            $table->primary(['id']);
        });

        Schema::create('lesson_access_logs', function (Blueprint $table) {
            $table->bigInteger('id', true)->unique('lesson_access_logs_index_138');
            $table->bigInteger('student_id')->nullable()->index('lesson_access_logs_index_139');
            $table->integer('program_id')->nullable()->index('lesson_access_logs_index_140');
            $table->integer('lesson_id')->nullable()->index('lesson_access_logs_index_141');
            $table->boolean('is_read')->nullable()->default(false);
            $table->boolean('is_learned')->nullable()->default(false);
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['student_id', 'program_id'], 'lesson_access_logs_index_142');
            $table->primary(['id']);
        });

        Schema::create('lessons', function (Blueprint $table) {
            $table->integer('id', true)->unique('lessons_index_18');
            $table->integer('program_id')->nullable()->index('lessons_index_19');
            $table->integer('level')->nullable();
            $table->integer('order')->nullable();
            $table->string('content')->nullable();
            $table->string('upload_file')->nullable();
            $table->enum('file_type', ['Pdf', 'Video', 'Audio'])->nullable()->default('Pdf');
            $table->string('link')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['program_id', 'level'], 'lessons_index_20');
            $table->primary(['id']);
        });

        Schema::create('level_competencies', function (Blueprint $table) {
            $table->integer('id', true)->unique('level_competencies_index_21');
            $table->integer('level')->nullable();
            $table->integer('program_id')->nullable()->index('level_competencies_index_22');
            $table->integer('lesson_id')->nullable()->index('level_competencies_index_23');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['program_id', 'level'], 'level_competencies_index_24');
            $table->primary(['id']);
        });

        Schema::create('level_recapitulations', function (Blueprint $table) {
            $table->bigInteger('id', true)->unique('level_recapitulations_index_187');
            $table->bigInteger('student_id')->nullable()->index('level_recapitulations_index_188');
            $table->integer('program_id')->nullable();
            $table->integer('level')->nullable();
            $table->boolean('is_certified')->nullable()->default(false)->comment('query setiap kali input session');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['student_id', 'program_id'], 'level_recapitulations_index_189');
            $table->index(['student_id', 'program_id', 'is_certified'], 'level_recapitulations_index_190');
            $table->index(['student_id', 'is_certified'], 'level_recapitulations_index_191');
            $table->index(['program_id', 'is_certified'], 'level_recapitulations_index_192');
            $table->primary(['id']);
        });

        Schema::create('level_tahfidz', function (Blueprint $table) {
            $table->integer('id', true)->unique('level_tahfidz_index_25');
            $table->integer('level')->nullable()->index('level_tahfidz_index_26');
            $table->integer('limit_juz')->nullable();
            $table->string('detail_juz')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->primary(['id']);
        });

        Schema::create('limit_teachers', function (Blueprint $table) {
            $table->integer('id', true)->unique('limit_teachers_index_34');
            $table->integer('program_id')->nullable()->index('program_id');
            $table->integer('teacher_id')->nullable()->index('limit_teachers_index_35');
            $table->integer('max_student')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['teacher_id', 'program_id'], 'limit_teachers_index_36');
            $table->primary(['id']);
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('payroll_allowances', function (Blueprint $table) {
            $table->integer('id', true)->unique('payroll_allowances_index_74');
            $table->integer('batch_id')->nullable();
            $table->integer('teacher_id')->nullable()->index('payroll_allowances_index_75');
            $table->string('allowance_name')->nullable();
            $table->float('amount')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['batch_id', 'teacher_id'], 'payroll_allowances_index_76');
            $table->primary(['id']);
        });

        Schema::create('payroll_base_salaries', function (Blueprint $table) {
            $table->integer('id', true)->unique('payroll_base_salaries_index_64');
            $table->integer('batch_id')->nullable()->index('payroll_base_salaries_index_65');
            $table->integer('teacher_id')->nullable()->index('payroll_base_salaries_index_66');
            $table->integer('program_id')->nullable()->index('payroll_base_salaries_index_67');
            $table->integer('total_student')->nullable();
            $table->float('base_sallary')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['batch_id', 'teacher_id', 'program_id'], 'payroll_base_salaries_index_68');
            $table->index(['batch_id', 'teacher_id'], 'payroll_base_salaries_index_69');
            $table->index(['teacher_id', 'program_id'], 'payroll_base_salaries_index_70');
            $table->primary(['id']);
        });

        Schema::create('payroll_bonuses', function (Blueprint $table) {
            $table->integer('id', true)->unique('payroll_bonuses_index_71');
            $table->integer('batch_id')->nullable();
            $table->integer('teacher_id')->nullable()->index('payroll_bonuses_index_72');
            $table->string('bonus_name')->nullable();
            $table->float('amount')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['batch_id', 'teacher_id'], 'payroll_bonuses_index_73');
            $table->primary(['id']);
        });

        Schema::create('payrolls', function (Blueprint $table) {
            $table->bigInteger('id', true)->unique('payrolls_index_55');
            $table->integer('teacher_id')->nullable()->index('payrolls_index_56');
            $table->integer('batch_id')->nullable()->index('payrolls_index_57');
            $table->integer('session_absent')->nullable();
            $table->float('sallary')->nullable();
            $table->float('deduction')->nullable();
            $table->float('takehome_pay')->nullable();
            $table->boolean('is_paid')->nullable()->default(false)->index('payrolls_index_58');
            $table->boolean('is_published')->nullable()->default(false);
            $table->timestamp('created_at')->nullable()->default('now()')->index('payrolls_index_59');
            $table->timestamp('updated_at')->nullable()->default('now()')->index('payrolls_index_60');

            $table->index(['teacher_id', 'batch_id'], 'payrolls_index_61');
            $table->index(['teacher_id', 'batch_id', 'is_paid'], 'payrolls_index_62');
            $table->index(['teacher_id', 'batch_id', 'created_at'], 'payrolls_index_63');
            $table->primary(['id']);
        });

        Schema::create('phone_change_requests', function (Blueprint $table) {
            $table->integer('id', true)->unique('phone_change_requests_index_108');
            $table->bigInteger('user_id')->nullable()->index('phone_change_requests_index_109');
            $table->string('new_phone')->nullable();
            $table->string('verification_code')->nullable()->index('phone_change_requests_index_110')->comment('Unique ID yg akan dikirim ke user');
            $table->boolean('is_verified')->nullable()->default(false);
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->primary(['id']);
            $table->unique(['verification_code'], 'verification_code');
        });

        Schema::create('phone_codes', function (Blueprint $table) {
            $table->integer('id', true)->unique('phone_codes_index_12');
            $table->string('country_name')->nullable();
            $table->string('code')->nullable();

            $table->primary(['id']);
        });

        Schema::create('program_teacher', function (Blueprint $table) {
            $table->integer('program_id')->nullable();
            $table->integer('teacher_id')->nullable();
        });

        Schema::create('programs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('program_name')->nullable();
            $table->string('description')->nullable();
            $table->float('base_price')->nullable();
            $table->float('base_sallary')->nullable();
            $table->float('price')->nullable();
            $table->float('minus_sallary')->nullable();
            $table->integer('max_student_in_class')->nullable();
            $table->integer('max_sessions')->nullable();
            $table->boolean('is_open')->nullable()->default(false)->index('programs_index_1');
            $table->string('tone_color')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'programs_index_0');
        });

        Schema::create('provinces', function (Blueprint $table) {
            $table->string('id', 20)->nullable()->unique('provinces_index_13');
            $table->string('province_name')->nullable();
        });

        Schema::create('questions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('program_id')->nullable()->index('questions_index_204');
            $table->string('question_name', 1000)->nullable();
            $table->enum('question_type', ['Multiple Choice', 'Checkbox', 'Essay'])->nullable();
            $table->float('poin')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'questions_index_203');
        });

        Schema::create('quran_recapitulations', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('student_id')->nullable()->index('quran_recapitulations_index_175');
            $table->integer('active_juz')->nullable()->default(30);
            $table->integer('total_row')->nullable()->default(0);
            $table->integer('real_row')->nullable()->default(0);
            $table->integer('real_page')->nullable()->default(0);
            $table->integer('real_juz')->nullable()->default(0);
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'quran_recapitulations_index_174');
        });

        Schema::create('regencies', function (Blueprint $table) {
            $table->string('id', 20)->nullable()->unique('regencies_index_14');
            $table->string('province_id', 20)->nullable()->index('regencies_index_15');
            $table->string('regency_name')->nullable();
        });

        Schema::create('registrations', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('student_id')->nullable()->index('registrations_index_112');
            $table->integer('batch_id')->nullable()->index('registrations_index_113');
            $table->integer('program_id')->nullable()->index('registrations_index_114');
            $table->integer('class_id')->nullable()->index('class_id');
            $table->integer('teacher_id')->nullable()->index('registrations_index_115');
            $table->integer('max_session')->nullable()->comment('Untuk menghitung total target sesi dari setiap pengajar');
            $table->integer('level')->nullable();
            $table->enum('registration_type', ['New', 'Renewal', 'Come Back'])->nullable()->index('registrations_index_116');
            $table->float('amount_pay')->nullable();
            $table->float('program_price')->nullable();
            $table->enum('payment_status', ['Proses', 'Konfirmasi', 'Selesai', 'Tidak Valid', 'Batal'])->nullable()->index('registrations_index_117');
            $table->timestamp('payment_expired_date')->nullable()->index('registrations_index_118');
            $table->string('attachment')->nullable();
            $table->enum('verification_status', ['Verifikasi', 'Menunggu', 'Error'])->nullable()->index('registrations_index_119');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'registrations_index_111');
            $table->index(['student_id', 'batch_id'], 'registrations_index_120');
            $table->index(['student_id', 'batch_id', 'program_id'], 'registrations_index_121');
            $table->index(['batch_id', 'program_id'], 'registrations_index_122');
            $table->index(['batch_id', 'teacher_id'], 'registrations_index_123');
            $table->index(['batch_id', 'teacher_id', 'program_id'], 'registrations_index_124');
            $table->index(['batch_id', 'teacher_id', 'class_id'], 'registrations_index_125');
            $table->index(['batch_id', 'program_id', 'level'], 'registrations_index_126');
            $table->index(['batch_id', 'registration_type'], 'registrations_index_127');
            $table->index(['batch_id', 'verification_status'], 'registrations_index_128');
            $table->index(['batch_id', 'payment_status'], 'registrations_index_129');
            $table->index(['batch_id', 'teacher_id'], 'registrations_index_130');
            $table->index(['batch_id', 'teacher_id', 'program_id'], 'registrations_index_131');
            $table->index(['batch_id', 'teacher_id', 'class_id'], 'registrations_index_132');
            $table->index(['batch_id', 'teacher_id', 'program_id', 'class_id'], 'registrations_index_133');
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('role_name')->nullable();
            $table->string('access')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'roles_index_2');
        });

        Schema::create('schedules', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('teacher_id')->nullable()->index('schedules_index_94');
            $table->integer('program_id')->nullable()->index('schedules_index_95');
            $table->enum('day', ['1', '2', '3', '4', '5', '6', '7'])->nullable();
            $table->time('time')->nullable();
            $table->boolean('is_open')->nullable()->default(true)->index('schedules_index_96');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'schedules_index_93');
            $table->index(['teacher_id', 'program_id'], 'schedules_index_97');
            $table->index(['teacher_id', 'program_id', 'is_open'], 'schedules_index_98');
            $table->index(['program_id', 'is_open'], 'schedules_index_99');
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('student_schedules', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('registration_id')->nullable()->index('student_schedules_index_135');
            $table->integer('batch_id')->nullable()->index('student_schedules_index_136');
            $table->enum('day', ['1', '2', '3', '4', '5', '6', '7'])->nullable();
            $table->time('time')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'student_schedules_index_134');
            $table->index(['registration_id', 'batch_id'], 'student_schedules_index_137');
        });

        Schema::create('students', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('user_id')->nullable()->index('students_index_101');
            $table->string('student_name')->nullable()->index('students_index_107');
            $table->enum('gender', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable()->index('students_index_102');
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('province_id')->nullable()->index('students_index_103');
            $table->string('regency_id')->nullable()->index('students_index_104');
            $table->string('district_id')->nullable()->index('students_index_105');
            $table->string('address', 1000)->nullable();
            $table->integer('job_id')->nullable()->index('students_index_106');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'students_index_100');
        });

        Schema::create('tahfidz_level_exams', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('batch_id')->nullable()->index('tahfidz_level_exams_index_194');
            $table->bigInteger('student_id')->nullable();
            $table->integer('teacher_id')->nullable()->index('teacher_id');
            $table->integer('level')->nullable();
            $table->integer('tap')->nullable()->default(0);
            $table->integer('guide')->nullable()->default(0);
            $table->integer('fail')->nullable()->default(0);
            $table->float('score')->nullable();
            $table->string('predicate')->nullable();
            $table->string('note')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'tahfidz_level_exams_index_193');
            $table->index(['batch_id', 'teacher_id'], 'tahfidz_level_exams_index_195');
            $table->index(['student_id', 'teacher_id'], 'tahfidz_level_exams_index_196');
            $table->index(['batch_id', 'student_id'], 'tahfidz_level_exams_index_197');
        });

        Schema::create('tahfidz_sessions', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('student_id')->nullable()->index('tahfidz_sessions_index_162');
            $table->integer('teacher_id')->nullable()->index('tahfidz_sessions_index_163');
            $table->integer('class_id')->nullable()->index('class_id');
            $table->integer('batch_id')->nullable()->index('tahfidz_sessions_index_164');
            $table->enum('day', ['1', '2', '3', '4', '5', '6', '7'])->nullable();
            $table->time('time')->nullable();
            $table->integer('level')->nullable();
            $table->string('note')->nullable();
            $table->string('comment')->nullable();
            $table->float('rating')->nullable()->default(0);
            $table->integer('juz')->nullable();
            $table->string('start_letter')->nullable();
            $table->string('end_letter')->nullable();
            $table->integer('start_verse')->nullable();
            $table->integer('end_verse')->nullable();
            $table->integer('row')->nullable();
            $table->integer('tap')->nullable()->default(0);
            $table->integer('guide')->nullable()->default(0);
            $table->float('score')->nullable()->default(100);
            $table->string('predicate')->nullable();
            $table->enum('absent_type', ['Hadir', 'Alpha', 'Sakit', 'Izin'])->nullable()->default('Hadir');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'tahfidz_sessions_index_161');
            $table->index(['batch_id', 'absent_type'], 'tahfidz_sessions_index_165');
            $table->index(['score', 'level'], 'tahfidz_sessions_index_166');
            $table->index(['student_id', 'batch_id'], 'tahfidz_sessions_index_167');
            $table->index(['student_id', 'batch_id', 'absent_type'], 'tahfidz_sessions_index_168');
            $table->index(['student_id', 'batch_id', 'score'], 'tahfidz_sessions_index_169');
            $table->index(['student_id', 'level'], 'tahfidz_sessions_index_170');
            $table->index(['teacher_id', 'batch_id'], 'tahfidz_sessions_index_171');
            $table->index(['teacher_id', 'class_id', 'batch_id'], 'tahfidz_sessions_index_172');
            $table->index(['teacher_id', 'batch_id', 'rating'], 'tahfidz_sessions_index_173');
        });

        Schema::create('tahsin_level_exams', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('batch_id')->nullable()->index('tahsin_level_exams_index_199');
            $table->bigInteger('student_id')->nullable();
            $table->integer('teacher_id')->nullable()->index('teacher_id');
            $table->integer('level')->nullable();
            $table->integer('mistake')->nullable()->default(0);
            $table->float('score')->nullable();
            $table->string('predicate')->nullable();
            $table->string('note')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'tahsin_level_exams_index_198');
            $table->index(['batch_id', 'teacher_id'], 'tahsin_level_exams_index_200');
            $table->index(['student_id', 'teacher_id'], 'tahsin_level_exams_index_201');
            $table->index(['batch_id', 'student_id'], 'tahsin_level_exams_index_202');
        });

        Schema::create('tahsin_sessions', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('student_id')->nullable()->index('tahsin_sessions_index_144');
            $table->integer('teacher_id')->nullable()->index('tahsin_sessions_index_145');
            $table->integer('class_id')->nullable()->index('class_id');
            $table->integer('batch_id')->nullable()->index('tahsin_sessions_index_148');
            $table->integer('lesson_id')->nullable()->index('tahsin_sessions_index_146');
            $table->enum('day', ['1', '2', '3', '4', '5', '6', '7'])->nullable();
            $table->time('time')->nullable();
            $table->integer('level')->nullable();
            $table->string('comment', 5000)->nullable();
            $table->float('rating')->nullable()->default(0)->index('tahsin_sessions_index_149');
            $table->integer('mistake')->nullable();
            $table->float('score')->nullable();
            $table->string('predicate')->nullable();
            $table->enum('absent_type', ['Hadir', 'Alpha', 'Sakit', 'Izin'])->nullable()->default('Hadir')->index('tahsin_sessions_index_147');
            $table->string('note', 5000)->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'tahsin_sessions_index_143');
            $table->index(['batch_id', 'absent_type'], 'tahsin_sessions_index_150');
            $table->index(['student_id', 'batch_id', 'absent_type'], 'tahsin_sessions_index_151');
            $table->index(['student_id', 'batch_id'], 'tahsin_sessions_index_152');
            $table->index(['student_id', 'batch_id', 'score'], 'tahsin_sessions_index_153');
            $table->index(['student_id', 'level'], 'tahsin_sessions_index_154');
            $table->index(['student_id', 'level', 'batch_id'], 'tahsin_sessions_index_155');
            $table->index(['teacher_id', 'batch_id'], 'tahsin_sessions_index_156');
            $table->index(['teacher_id', 'batch_id', 'absent_type'], 'tahsin_sessions_index_157');
            $table->index(['teacher_id', 'batch_id', 'level'], 'tahsin_sessions_index_158');
            $table->index(['teacher_id', 'rating'], 'tahsin_sessions_index_159');
            $table->index(['teacher_id', 'batch_id', 'rating'], 'tahsin_sessions_index_160');
        });

        Schema::create('teacher_absents', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('teacher_id')->nullable()->index('teacher_absents_index_42');
            $table->integer('batch_id')->nullable()->index('batch_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('absent_type', ['Izin', 'Sakit'])->nullable();
            $table->string('note', 1000)->nullable();
            $table->string('attachment')->nullable();
            $table->enum('status', ['Diterima', 'Proses', 'Ditolak'])->nullable();
            $table->timestamp('created_at')->nullable()->default('now()')->index('teacher_absents_index_43');
            $table->timestamp('updated_at')->nullable()->default('now()')->index('teacher_absents_index_44');

            $table->unique(['id'], 'teacher_absents_index_41');
            $table->index(['teacher_id', 'batch_id'], 'teacher_absents_index_45');
            $table->index(['teacher_id', 'batch_id', 'status'], 'teacher_absents_index_46');
            $table->index(['teacher_id', 'status'], 'teacher_absents_index_47');
            $table->index(['teacher_id', 'batch_id', 'status', 'created_at'], 'teacher_absents_index_48');
        });

        Schema::create('teacher_allowances', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('teacher_id')->nullable()->index('teacher_allowances_index_52');
            $table->integer('allowance_id')->nullable()->index('teacher_allowances_index_53');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'teacher_allowances_index_51');
            $table->index(['teacher_id', 'allowance_id'], 'teacher_allowances_index_54');
        });

        Schema::create('teacher_certificates', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('teacher_id')->nullable()->index('teacher_certificates_index_38');
            $table->string('certificate_name')->nullable();
            $table->string('file')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'teacher_certificates_index_37');
        });

        Schema::create('teacher_skills', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('teacher_id')->nullable()->index('teacher_skills_index_40');
            $table->string('skill_name')->nullable();
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'teacher_skills_index_39');
        });

        Schema::create('teachers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('user_id')->nullable()->index('teachers_index_28');
            $table->string('teacher_code')->nullable();
            $table->string('teacher_name')->nullable()->index('teachers_index_31');
            $table->enum('gender', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('email')->nullable();
            $table->string('address', 500)->nullable();
            $table->string('phone')->nullable()->index('teachers_index_29');
            $table->string('bank_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_name')->nullable();
            $table->enum('status', ['Aktif', 'Cuti', 'Mengundurkan Diri', 'Dikeluarkan', 'Dihapus'])->nullable();
            $table->string('tone_color')->nullable();
            $table->float('rating')->nullable()->default(0)->index('teachers_index_30');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->unique(['id'], 'teachers_index_27');
            $table->index(['rating'], 'teachers_index_32');
            $table->index(['user_id', 'rating'], 'teachers_index_33');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('email')->nullable()->unique('email');
            $table->string('password')->nullable();
            $table->string('fullname')->nullable();
            $table->integer('role_id')->nullable()->index('users_index_5');
            $table->string('photo')->nullable();
            $table->string('verification_code')->nullable()->index('users_index_7');
            $table->boolean('is_verified')->nullable();
            $table->timestamp('verified_at')->nullable()->default('now()');
            $table->timestamp('last_seen')->nullable()->default('now()')->index('users_index_6');
            $table->timestamp('created_at')->nullable()->default('now()');
            $table->timestamp('updated_at')->nullable()->default('now()');

            $table->index(['email', 'password', 'role_id'], 'users_index_10');
            $table->unique(['id'], 'users_index_3');
            $table->index(['email'], 'users_index_4');
            $table->index(['email', 'password'], 'users_index_8');
            $table->index(['email', 'role_id'], 'users_index_9');
            $table->unique(['verification_code'], 'verification_code');
        });

        Schema::table('answers', function (Blueprint $table) {
            $table->foreign(['question_id'], 'answers_ibfk_1')->references(['id'])->on('questions')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('bonus_requests', function (Blueprint $table) {
            $table->foreign(['bonus_id'], 'bonus_requests_ibfk_1')->references(['id'])->on('bonuses')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['batch_id'], 'bonus_requests_ibfk_2')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'bonus_requests_ibfk_3')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('classes', function (Blueprint $table) {
            $table->foreign(['program_id'], 'classes_ibfk_1')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'classes_ibfk_2')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('exam_packages', function (Blueprint $table) {
            $table->foreign(['program_id'], 'exam_packages_ibfk_1')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('exam_questions', function (Blueprint $table) {
            $table->foreign(['exam_package_id'], 'exam_questions_ibfk_1')->references(['id'])->on('exam_packages')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['question_id'], 'exam_questions_ibfk_2')->references(['id'])->on('questions')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('exam_reports', function (Blueprint $table) {
            $table->foreign(['exam_package_id'], 'exam_reports_ibfk_1')->references(['id'])->on('exam_packages')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['student_id'], 'exam_reports_ibfk_2')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['program_id'], 'exam_reports_ibfk_3')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('exam_results', function (Blueprint $table) {
            $table->foreign(['student_id'], 'exam_results_ibfk_1')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['program_id'], 'exam_results_ibfk_2')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['exam_package_id'], 'exam_results_ibfk_3')->references(['id'])->on('exam_packages')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('juz_exams', function (Blueprint $table) {
            $table->foreign(['batch_id'], 'juz_exams_ibfk_1')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['student_id'], 'juz_exams_ibfk_2')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'juz_exams_ibfk_3')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('juz_recapitulations', function (Blueprint $table) {
            $table->foreign(['student_id'], 'juz_recapitulations_ibfk_1')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('lesson_access_logs', function (Blueprint $table) {
            $table->foreign(['student_id'], 'lesson_access_logs_ibfk_1')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['program_id'], 'lesson_access_logs_ibfk_2')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['lesson_id'], 'lesson_access_logs_ibfk_3')->references(['id'])->on('lessons')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('lessons', function (Blueprint $table) {
            $table->foreign(['program_id'], 'lessons_ibfk_1')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('level_competencies', function (Blueprint $table) {
            $table->foreign(['program_id'], 'level_competencies_ibfk_1')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['lesson_id'], 'level_competencies_ibfk_2')->references(['id'])->on('lessons')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('level_recapitulations', function (Blueprint $table) {
            $table->foreign(['student_id'], 'level_recapitulations_ibfk_1')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['program_id'], 'level_recapitulations_ibfk_2')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('limit_teachers', function (Blueprint $table) {
            $table->foreign(['program_id'], 'limit_teachers_ibfk_1')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'limit_teachers_ibfk_2')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('payroll_allowances', function (Blueprint $table) {
            $table->foreign(['batch_id'], 'payroll_allowances_ibfk_1')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'payroll_allowances_ibfk_2')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('payroll_base_salaries', function (Blueprint $table) {
            $table->foreign(['batch_id'], 'payroll_base_salaries_ibfk_1')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'payroll_base_salaries_ibfk_2')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['program_id'], 'payroll_base_salaries_ibfk_3')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('payroll_bonuses', function (Blueprint $table) {
            $table->foreign(['batch_id'], 'payroll_bonuses_ibfk_1')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'payroll_bonuses_ibfk_2')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('payrolls', function (Blueprint $table) {
            $table->foreign(['teacher_id'], 'payrolls_ibfk_1')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['batch_id'], 'payrolls_ibfk_2')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('phone_change_requests', function (Blueprint $table) {
            $table->foreign(['user_id'], 'phone_change_requests_ibfk_1')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->foreign(['program_id'], 'questions_ibfk_1')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('quran_recapitulations', function (Blueprint $table) {
            $table->foreign(['student_id'], 'quran_recapitulations_ibfk_1')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('registrations', function (Blueprint $table) {
            $table->foreign(['student_id'], 'registrations_ibfk_1')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['batch_id'], 'registrations_ibfk_2')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['program_id'], 'registrations_ibfk_3')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['class_id'], 'registrations_ibfk_4')->references(['id'])->on('classes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'registrations_ibfk_5')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('schedules', function (Blueprint $table) {
            $table->foreign(['teacher_id'], 'schedules_ibfk_1')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['program_id'], 'schedules_ibfk_2')->references(['id'])->on('programs')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('student_schedules', function (Blueprint $table) {
            $table->foreign(['registration_id'], 'student_schedules_ibfk_1')->references(['id'])->on('registrations')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['batch_id'], 'student_schedules_ibfk_2')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('students', function (Blueprint $table) {
            $table->foreign(['user_id'], 'students_ibfk_1')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['province_id'], 'students_ibfk_2')->references(['id'])->on('provinces')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['regency_id'], 'students_ibfk_3')->references(['id'])->on('regencies')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['district_id'], 'students_ibfk_4')->references(['id'])->on('districts')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['job_id'], 'students_ibfk_5')->references(['id'])->on('jobs')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('tahfidz_level_exams', function (Blueprint $table) {
            $table->foreign(['batch_id'], 'tahfidz_level_exams_ibfk_1')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['student_id'], 'tahfidz_level_exams_ibfk_2')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'tahfidz_level_exams_ibfk_3')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('tahfidz_sessions', function (Blueprint $table) {
            $table->foreign(['student_id'], 'tahfidz_sessions_ibfk_1')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'tahfidz_sessions_ibfk_2')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['class_id'], 'tahfidz_sessions_ibfk_3')->references(['id'])->on('classes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['batch_id'], 'tahfidz_sessions_ibfk_4')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('tahsin_level_exams', function (Blueprint $table) {
            $table->foreign(['batch_id'], 'tahsin_level_exams_ibfk_1')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['student_id'], 'tahsin_level_exams_ibfk_2')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'tahsin_level_exams_ibfk_3')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('tahsin_sessions', function (Blueprint $table) {
            $table->foreign(['student_id'], 'tahsin_sessions_ibfk_1')->references(['id'])->on('students')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['teacher_id'], 'tahsin_sessions_ibfk_2')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['class_id'], 'tahsin_sessions_ibfk_3')->references(['id'])->on('classes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['batch_id'], 'tahsin_sessions_ibfk_4')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['lesson_id'], 'tahsin_sessions_ibfk_5')->references(['id'])->on('lessons')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('teacher_absents', function (Blueprint $table) {
            $table->foreign(['teacher_id'], 'teacher_absents_ibfk_1')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['batch_id'], 'teacher_absents_ibfk_2')->references(['id'])->on('batches')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('teacher_allowances', function (Blueprint $table) {
            $table->foreign(['teacher_id'], 'teacher_allowances_ibfk_1')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['allowance_id'], 'teacher_allowances_ibfk_2')->references(['id'])->on('allowances')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('teacher_certificates', function (Blueprint $table) {
            $table->foreign(['teacher_id'], 'teacher_certificates_ibfk_1')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('teacher_skills', function (Blueprint $table) {
            $table->foreign(['teacher_id'], 'teacher_skills_ibfk_1')->references(['id'])->on('teachers')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('teachers', function (Blueprint $table) {
            $table->foreign(['user_id'], 'teachers_ibfk_1')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign(['role_id'], 'users_ibfk_1')->references(['id'])->on('roles')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_ibfk_1');
        });

        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign('teachers_ibfk_1');
        });

        Schema::table('teacher_skills', function (Blueprint $table) {
            $table->dropForeign('teacher_skills_ibfk_1');
        });

        Schema::table('teacher_certificates', function (Blueprint $table) {
            $table->dropForeign('teacher_certificates_ibfk_1');
        });

        Schema::table('teacher_allowances', function (Blueprint $table) {
            $table->dropForeign('teacher_allowances_ibfk_1');
            $table->dropForeign('teacher_allowances_ibfk_2');
        });

        Schema::table('teacher_absents', function (Blueprint $table) {
            $table->dropForeign('teacher_absents_ibfk_1');
            $table->dropForeign('teacher_absents_ibfk_2');
        });

        Schema::table('tahsin_sessions', function (Blueprint $table) {
            $table->dropForeign('tahsin_sessions_ibfk_1');
            $table->dropForeign('tahsin_sessions_ibfk_2');
            $table->dropForeign('tahsin_sessions_ibfk_3');
            $table->dropForeign('tahsin_sessions_ibfk_4');
            $table->dropForeign('tahsin_sessions_ibfk_5');
        });

        Schema::table('tahsin_level_exams', function (Blueprint $table) {
            $table->dropForeign('tahsin_level_exams_ibfk_1');
            $table->dropForeign('tahsin_level_exams_ibfk_2');
            $table->dropForeign('tahsin_level_exams_ibfk_3');
        });

        Schema::table('tahfidz_sessions', function (Blueprint $table) {
            $table->dropForeign('tahfidz_sessions_ibfk_1');
            $table->dropForeign('tahfidz_sessions_ibfk_2');
            $table->dropForeign('tahfidz_sessions_ibfk_3');
            $table->dropForeign('tahfidz_sessions_ibfk_4');
        });

        Schema::table('tahfidz_level_exams', function (Blueprint $table) {
            $table->dropForeign('tahfidz_level_exams_ibfk_1');
            $table->dropForeign('tahfidz_level_exams_ibfk_2');
            $table->dropForeign('tahfidz_level_exams_ibfk_3');
        });

        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign('students_ibfk_1');
            $table->dropForeign('students_ibfk_2');
            $table->dropForeign('students_ibfk_3');
            $table->dropForeign('students_ibfk_4');
            $table->dropForeign('students_ibfk_5');
        });

        Schema::table('student_schedules', function (Blueprint $table) {
            $table->dropForeign('student_schedules_ibfk_1');
            $table->dropForeign('student_schedules_ibfk_2');
        });

        Schema::table('schedules', function (Blueprint $table) {
            $table->dropForeign('schedules_ibfk_1');
            $table->dropForeign('schedules_ibfk_2');
        });

        Schema::table('registrations', function (Blueprint $table) {
            $table->dropForeign('registrations_ibfk_1');
            $table->dropForeign('registrations_ibfk_2');
            $table->dropForeign('registrations_ibfk_3');
            $table->dropForeign('registrations_ibfk_4');
            $table->dropForeign('registrations_ibfk_5');
        });

        Schema::table('quran_recapitulations', function (Blueprint $table) {
            $table->dropForeign('quran_recapitulations_ibfk_1');
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign('questions_ibfk_1');
        });

        Schema::table('phone_change_requests', function (Blueprint $table) {
            $table->dropForeign('phone_change_requests_ibfk_1');
        });

        Schema::table('payrolls', function (Blueprint $table) {
            $table->dropForeign('payrolls_ibfk_1');
            $table->dropForeign('payrolls_ibfk_2');
        });

        Schema::table('payroll_bonuses', function (Blueprint $table) {
            $table->dropForeign('payroll_bonuses_ibfk_1');
            $table->dropForeign('payroll_bonuses_ibfk_2');
        });

        Schema::table('payroll_base_salaries', function (Blueprint $table) {
            $table->dropForeign('payroll_base_salaries_ibfk_1');
            $table->dropForeign('payroll_base_salaries_ibfk_2');
            $table->dropForeign('payroll_base_salaries_ibfk_3');
        });

        Schema::table('payroll_allowances', function (Blueprint $table) {
            $table->dropForeign('payroll_allowances_ibfk_1');
            $table->dropForeign('payroll_allowances_ibfk_2');
        });

        Schema::table('limit_teachers', function (Blueprint $table) {
            $table->dropForeign('limit_teachers_ibfk_1');
            $table->dropForeign('limit_teachers_ibfk_2');
        });

        Schema::table('level_recapitulations', function (Blueprint $table) {
            $table->dropForeign('level_recapitulations_ibfk_1');
            $table->dropForeign('level_recapitulations_ibfk_2');
        });

        Schema::table('level_competencies', function (Blueprint $table) {
            $table->dropForeign('level_competencies_ibfk_1');
            $table->dropForeign('level_competencies_ibfk_2');
        });

        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('lessons_ibfk_1');
        });

        Schema::table('lesson_access_logs', function (Blueprint $table) {
            $table->dropForeign('lesson_access_logs_ibfk_1');
            $table->dropForeign('lesson_access_logs_ibfk_2');
            $table->dropForeign('lesson_access_logs_ibfk_3');
        });

        Schema::table('juz_recapitulations', function (Blueprint $table) {
            $table->dropForeign('juz_recapitulations_ibfk_1');
        });

        Schema::table('juz_exams', function (Blueprint $table) {
            $table->dropForeign('juz_exams_ibfk_1');
            $table->dropForeign('juz_exams_ibfk_2');
            $table->dropForeign('juz_exams_ibfk_3');
        });

        Schema::table('exam_results', function (Blueprint $table) {
            $table->dropForeign('exam_results_ibfk_1');
            $table->dropForeign('exam_results_ibfk_2');
            $table->dropForeign('exam_results_ibfk_3');
        });

        Schema::table('exam_reports', function (Blueprint $table) {
            $table->dropForeign('exam_reports_ibfk_1');
            $table->dropForeign('exam_reports_ibfk_2');
            $table->dropForeign('exam_reports_ibfk_3');
        });

        Schema::table('exam_questions', function (Blueprint $table) {
            $table->dropForeign('exam_questions_ibfk_1');
            $table->dropForeign('exam_questions_ibfk_2');
        });

        Schema::table('exam_packages', function (Blueprint $table) {
            $table->dropForeign('exam_packages_ibfk_1');
        });

        Schema::table('classes', function (Blueprint $table) {
            $table->dropForeign('classes_ibfk_1');
            $table->dropForeign('classes_ibfk_2');
        });

        Schema::table('bonus_requests', function (Blueprint $table) {
            $table->dropForeign('bonus_requests_ibfk_1');
            $table->dropForeign('bonus_requests_ibfk_2');
            $table->dropForeign('bonus_requests_ibfk_3');
        });

        Schema::table('answers', function (Blueprint $table) {
            $table->dropForeign('answers_ibfk_1');
        });

        Schema::dropIfExists('users');

        Schema::dropIfExists('teachers');

        Schema::dropIfExists('teacher_skills');

        Schema::dropIfExists('teacher_certificates');

        Schema::dropIfExists('teacher_allowances');

        Schema::dropIfExists('teacher_absents');

        Schema::dropIfExists('tahsin_sessions');

        Schema::dropIfExists('tahsin_level_exams');

        Schema::dropIfExists('tahfidz_sessions');

        Schema::dropIfExists('tahfidz_level_exams');

        Schema::dropIfExists('students');

        Schema::dropIfExists('student_schedules');

        Schema::dropIfExists('sessions');

        Schema::dropIfExists('schedules');

        Schema::dropIfExists('roles');

        Schema::dropIfExists('registrations');

        Schema::dropIfExists('regencies');

        Schema::dropIfExists('quran_recapitulations');

        Schema::dropIfExists('questions');

        Schema::dropIfExists('provinces');

        Schema::dropIfExists('programs');

        Schema::dropIfExists('program_teacher');

        Schema::dropIfExists('phone_codes');

        Schema::dropIfExists('phone_change_requests');

        Schema::dropIfExists('payrolls');

        Schema::dropIfExists('payroll_bonuses');

        Schema::dropIfExists('payroll_base_salaries');

        Schema::dropIfExists('payroll_allowances');

        Schema::dropIfExists('password_reset_tokens');

        Schema::dropIfExists('limit_teachers');

        Schema::dropIfExists('level_tahfidz');

        Schema::dropIfExists('level_recapitulations');

        Schema::dropIfExists('level_competencies');

        Schema::dropIfExists('lessons');

        Schema::dropIfExists('lesson_access_logs');

        Schema::dropIfExists('juz_recapitulations');

        Schema::dropIfExists('juz_exams');

        Schema::dropIfExists('jobs');

        Schema::dropIfExists('exam_results');

        Schema::dropIfExists('exam_reports');

        Schema::dropIfExists('exam_questions');

        Schema::dropIfExists('exam_packages');

        Schema::dropIfExists('districts');

        Schema::dropIfExists('classes');

        Schema::dropIfExists('cache_locks');

        Schema::dropIfExists('cache');

        Schema::dropIfExists('bonuses');

        Schema::dropIfExists('bonus_requests');

        Schema::dropIfExists('batches');

        Schema::dropIfExists('answers');

        Schema::dropIfExists('allowances');
    }
};
