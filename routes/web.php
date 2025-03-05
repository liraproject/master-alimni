<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Livewire\Guest\DetailAboutUs;
use App\Livewire\Guest\DetailProgram;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginView'])->name('loginView');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'registerView'])->name('registerView');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
});

Route::get('/', [\App\Http\Controllers\AuthController::class, 'landingView'])->name('landing-view');
Route::get('/program-tahsin', DetailProgram::class)->name('program-tahsin');
Route::get('/about-us', DetailAboutUs::class)->name('about-us');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

REQUIRE __DIR__.'/admin.php';

REQUIRE __DIR__.'/student.php';

REQUIRE __DIR__.'/teacher.php';
