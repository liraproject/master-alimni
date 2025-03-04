<?php

use App\Livewire\Guest\BoardingRegistration;
use App\Livewire\Guest\PrivacyPolicy;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'public.'], function () {
    Route::get('/', [\App\Http\Controllers\AuthController::class, 'landingView'])->name('landing-view');
    Route::get('/boarding-registration', BoardingRegistration::class)->name('boarding-registration');
    Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginView'])->name('loginView');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

REQUIRE __DIR__.'/admin.php';

REQUIRE __DIR__.'/student.php';

REQUIRE __DIR__.'/teacher.php';
