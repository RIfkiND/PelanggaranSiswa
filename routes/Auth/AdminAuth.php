<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuth\AdminLoginController;
use App\Http\Controllers\Admin\AdminAuth\AdminLogoutController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;

Route::get('Admin/Dashboard',[DashboardController::class,'AdminDashboard'])->name('AdminDashboard')->middleware('IsAdmin');

