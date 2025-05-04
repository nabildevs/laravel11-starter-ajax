<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::delete('file/{path_base64}', [FileController::class, 'destroy'])->name('file.destroy');
    Route::resource('setting', SettingController::class);

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Information
    Route::resource('information', InformationController::class);
    Route::group(['prefix' => 'information/g', 'as' => 'information.'], function () {
        Route::get('delete/{information}', [InformationController::class, 'delete'])->name('delete');
    });
});

require __DIR__ . '/auth.php';
