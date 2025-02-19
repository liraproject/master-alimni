<?php

use App\Livewire\Menu\Mobile\CertificationMenuMobile;
use App\Livewire\Menu\Mobile\MainMenuMobile;
use App\Livewire\Menu\Mobile\MaterialMenuMobile;
use App\Livewire\Student\Account\AccountStudent;
use App\Livewire\Student\Certification\Juz\JuzCertificationStudent;
use App\Livewire\Student\Certification\Level\LevelCertificationStudent;
use App\Livewire\Student\Certification\Review\ReviewCertificationStudent;
use App\Livewire\Student\Dashboard\DashboardStudent;
use App\Livewire\Student\Profile\ProfileStudent;
use App\Livewire\Student\Registration\RegistrationStudent;
use App\Livewire\Student\ReportCard\ReportCardStudent;
use App\Livewire\Student\Tahfidz\History\HistoryTahfidzStudent;
use App\Livewire\Student\Tahfidz\Material\MaterialTahfidzStudent;
use App\Livewire\Student\Tahfidz\Murajaah\MurajaahTahfidzStudent;
use App\Livewire\Student\Tahsin\History\HistoryTahsinStudent;
use App\Livewire\Student\Tahsin\Material\MaterialTahsinStudent;
use Illuminate\Support\Facades\Route;

// -------------STUDENT------------//
Route::group(['middleware' => ['auth', 'student'], 'prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('/dashboard', DashboardStudent::class)->name('dashboard');
    Route::get('/profile', ProfileStudent::class)->name('profile');
    // Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
    //     // child route, ex Detail Material
    // });
    Route::get('/registration', RegistrationStudent::class)->name('registration');
    // Route::group(['prefix' => 'registration', 'as' => 'registration.'], function () {
    //     // child route, ex Detail Material
    // });

    Route::group(['prefix' => 'tahsin', 'as' => 'tahsin.'], function () {
        Route::get('/material', MaterialTahsinStudent::class)->name('material');
        Route::group(['prefix' => 'material', 'as' => 'material.'], function () {
            // child route, ex Detail Material
        });
        Route::get('/history', HistoryTahsinStudent::class)->name('history');
        Route::group(['prefix' => 'history', 'as' => 'history.'], function () {
            // child route, ex Detail History Tahsin
        });
    });

    Route::group(['prefix' => 'tahfidz', 'as' => 'tahfidz.'], function () {
        Route::get('/material', MaterialTahfidzStudent::class)->name('material');
        Route::group(['prefix' => 'material', 'as' => 'material.'], function () {
            // child route, ex Detail Material
        });
        Route::get('/history', HistoryTahfidzStudent::class)->name('history');
        Route::group(['prefix' => 'history', 'as' => 'history.'], function () {
            // child route, ex Detail History Tahfidz
        });
        Route::get('/murojaah', MurajaahTahfidzStudent::class)->name('murojaah');
        Route::group(['prefix' => 'murojaah', 'as' => 'murojaah.'], function () {
            // child route, ex Detail Murajaah Tahfidz
        });
    });

    Route::group(['prefix' => 'certification', 'as' => 'certification.'], function () {
        Route::get('/level', LevelCertificationStudent::class)->name('level');
        Route::group(['prefix' => 'level', 'as' => 'level.'], function () {
            // child route, ex Detail Level
        });
        Route::get('/review', ReviewCertificationStudent::class)->name('review');
        Route::group(['prefix' => 'review', 'as' => 'review.'], function () {
            // child route, ex Detail Ulasan
        });
        Route::get('/juz', JuzCertificationStudent::class)->name('juz');
        Route::group(['prefix' => 'juz', 'as' => 'juz.'], function () {
            // child route, ex Detail Kenaikan Juz
        });
    });

    Route::get('/report-card', ReportCardStudent::class)->name('report-card');
    Route::group(['prefix' => 'report-card', 'as' => 'report-card.'], function () {
        // child route, ex Detail Rapor
    });
    Route::get('/account', AccountStudent::class)->name('account');
    Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
        // child route, ex Detail Rapor
    });

    // Extend Menu for mobile
    Route::group(['prefix' => 'menu', 'as' => 'menu.'], function () {
        Route::get('/main', MainMenuMobile::class)->name('main');
        Route::get('/material', MaterialMenuMobile::class)->name('material');
        Route::get('/certification', CertificationMenuMobile::class)->name('certification');
    });
});
