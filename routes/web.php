<?php

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::view('profile', 'profile')->middleware(['auth'])->name('profile');

Route::middleware('guest')->group(function () {
    Route::get('/login', App\Livewire\Pages\Public\Login\Index::class)->name('login');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', App\Livewire\Pages\Admin\Dashboard\Index::class)->name('admin.dashboard');
});

require __DIR__.'/auth.php';
