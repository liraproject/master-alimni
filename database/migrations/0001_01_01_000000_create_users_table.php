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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('name');
=======
            $table->string('role_name');
>>>>>>> d97dd6d (22 feb)
            $table->string('access', 255);
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
<<<<<<< HEAD
            $table->string('fullname', 255);
            $table->foreignId('role_id')->constrained('roles');
            $table->string('photo', 255)->nullable();
            $table->string('verification_code', 255)->unique();
            $table->boolean('is_verified');
            $table->timestamp('verified_at')->default(now());
            $table->timestamp('last_seen')->default(now());
=======
            $table->string('fullname');
            $table->foreignId('role_id')->constrained('roles');
            $table->string('photo')->nullable();
            $table->string('verification_code')->nullable()->unique();
            $table->boolean('is_verified')->nullable()->default(false);
            $table->timestamp('verified_at')->nullable()->default(now());
            $table->timestamp('last_seen')->nullable()->default(now());
            $table->rememberToken();
>>>>>>> d97dd6d (22 feb)
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
