<?php

use App\Livewire\Student\Account\AccountStudent;
use App\Livewire\Student\Dashboard\DashboardStudent;
use App\Livewire\Student\Exam\Certification\CertificationExamStudent;
use App\Livewire\Student\Exam\Placement\Juz\JuzExamStudent;
use App\Livewire\Student\Exam\Placement\Level\LevelExamStudent;
use App\Livewire\Student\Learning\Tahfidz\Manzil\ManzilTahfidzStudent;
use App\Livewire\Student\Learning\Tahfidz\Materi\MateriTahfidzStudent;
use App\Livewire\Student\Learning\Tahfidz\Sabaq\SabaqTahfidzStudent;
use App\Livewire\Student\Learning\Tahfidz\Sabqi\SabqiTahfidzStudent;
use App\Livewire\Student\Learning\Tahsin\Materi\MateriTahsinStudent;
use App\Livewire\Student\Learning\Tahsin\Riwayat\RiwayatTahsinStudent;
use App\Livewire\Student\Profile\ProfileStudent;
use App\Livewire\Student\Raport\RaportStudent;
use App\Livewire\Student\Review\ReviewStudent;
use Illuminate\Support\Facades\Route;

// -------------STUDENT------------//
Route::group(['middleware' => ['auth', 'student'], 'prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('/dashboard', DashboardStudent::class)->name('dashboard');
    Route::get('/profile', ProfileStudent::class)->name('profile');
    Route::get('/registration', ProfileStudent::class)->name('registration');

    Route::group(['prefix' => 'learning', 'as' => 'learning.'], function () {
        Route::group(['prefix' => 'tahsin', 'as' => 'tahsin.'], function () {
            Route::get('/materi', MateriTahsinStudent::class)->name('materi');
            Route::get('/riwayat', RiwayatTahsinStudent::class)->name('riwayat');
        });

        Route::group(['prefix' => 'tahfidz', 'as' => 'tahfidz.'], function () {
            Route::get('/materi', MateriTahfidzStudent::class)->name('materi');
            Route::get('/sabaq', SabaqTahfidzStudent::class)->name('sabaq');
            Route::get('/sabqi', SabqiTahfidzStudent::class)->name('sabqi');
            Route::get('/manzil', ManzilTahfidzStudent::class)->name('manzil');
        });
    });

    Route::group(['prefix' => 'exam', 'as' => 'exam.'], function () {
        Route::get('/certification', CertificationExamStudent::class)->name('certification');

        Route::group(['prefix' => 'placement', 'as' => 'placement.'], function () {
            Route::get('/level', LevelExamStudent::class)->name('level');
            Route::get('/juz', JuzExamStudent::class)->name('juz');
        });
    });

    Route::get('/raport', RaportStudent::class)->name('raport');
    Route::get('/review', ReviewStudent::class)->name('review');
    Route::get('/account', AccountStudent::class)->name('account');
});
