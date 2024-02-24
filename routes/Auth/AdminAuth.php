<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuth\AdminLoginController;
use App\Http\Controllers\Admin\AdminAuth\AdminLogoutController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;


Route::get('/Admin', [DashboardController::class, 'AdminDashboard'])->name('AdminDashboard')->middleware('IsAdmin');


Route::prefix('Admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'Adminloginview'])->name('admin.login');
    Route::post('/auth/process', [AdminLoginController::class, 'AdminLogin'])->name('admin.auth');
    Route::post('/logout', [AdminLogoutController::class, 'AdminLogout'])->name('admin.logout');
});
