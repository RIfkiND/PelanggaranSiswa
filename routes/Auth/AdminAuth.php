<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuth\AdminLoginController;
use App\Http\Controllers\Admin\AdminAuth\AdminLogoutController;


Route::prefix('Admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'Adminloginview'])->name('admin.login');
    Route::post('/login/process', [AdminLoginController::class, 'AdminLogin'])->name('admin.auth');
    Route::post('/logout', [AdminLogoutController::class, 'AdminLogout'])->name('admin.logout'); // Corrected the name here
});
