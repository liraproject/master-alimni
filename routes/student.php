<?php

use App\Livewire\Student\Dashboard\DashboardStudent;
use Illuminate\Support\Facades\Route;

//-------------STUDENT------------//
Route::group(['middleware' => ['auth', 'student'], 'as' => 'student.'], function () {
    Route::prefix('student')->group(function () {
        Route::get('/dashboard', DashboardStudent::class)->name('dashboard');
    });
});
