<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoard\DashboardController;


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
Route::get('/dashboard',[DashboardController::class,'Das'])->name('Dashboard');


require __DIR__.'/Auth/UserAuth.php';
require __DIR__.'/Auth/AdminAuth.php';
