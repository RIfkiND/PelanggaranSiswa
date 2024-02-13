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



Route::get('/', function () {
    return view('Admin.Dashboard.Pages.test');
});
Route::get('/test', function () {
    return view('Admin.Auth.Login');
});
require __DIR__ . '/Auth/UserAuth.php';
require __DIR__ . '/Auth/AdminAuth.php';
require __DIR__ . '/Dashboard/Admin.php';
require __DIR__ . '/Export/ExportExcel.php';
require __DIR__ . '/Dashboard/Petguas.php';
