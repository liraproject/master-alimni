<?php

use App\Livewire\Admin\Dashboard\DashboardAdmin;
use App\Livewire\Admin\Examples\Components\ComponentChart;
use App\Livewire\Admin\Examples\Components\ComponentComponents;
use App\Livewire\Admin\Examples\Components\ComponentTable;
use App\Livewire\Admin\Examples\Elements;
use App\Livewire\Admin\Examples\Forms\FormComponents;
use App\Livewire\Admin\Examples\Forms\FormLayouts;
use Illuminate\Support\Facades\Route;

// -------------ADMIN------------//
Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', DashboardAdmin::class)->name('dashboard');

    Route::prefix('forms')->name('forms.')->group(function () {
        Route::get('/components', FormComponents::class)->name('components');
        Route::get('/layouts', FormLayouts::class)->name('layouts');
    });

    Route::prefix('components')->name('components.')->group(function () {
        Route::get('/components', ComponentComponents::class)->name('components');
        Route::get('/table', ComponentTable::class)->name('table');
        Route::get('/chart', ComponentChart::class)->name('chart');
    });

    Route::get('/elements', Elements::class)->name('elements');
});
