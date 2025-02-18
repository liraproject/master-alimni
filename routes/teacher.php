<?php

use App\Livewire\Teacher\Dashboard\DashboardTeacher;
use Illuminate\Support\Facades\Route;

//-------------TEACHER------------//
Route::group(['middleware' => ['auth', 'teacher'], 'prefix' => 'teacher', 'as' => 'teacher.'], function () {
    Route::get('/dashboard', DashboardTeacher::class)->name('dashboard');
});
