<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('file/{path_base64}', [FileController::class, 'destroy'])->name('file.destroy');

    // Setting
    Route::resource('setting', SettingController::class);
});

require __DIR__ . '/auth.php';
