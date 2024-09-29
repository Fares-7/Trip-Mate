<?php

use App\Http\Controllers\Auth\AuthAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;


Route::middleware('guest')->group(function () {

    Route::get('login', [AuthAdminController::class, 'create'])
        ->name('adminlogin');

    Route::post('login', [AuthAdminController::class, 'store']);
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [BackController::class, 'index'])->name('admin.dashboard');
    Route::post('admin/logout', [AuthAdminController::class, 'destroy'])
        ->name('admin.logout');
});
