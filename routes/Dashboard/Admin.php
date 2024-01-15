<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DashboardController;


Route::get('/Admin/Dashboard/list-pelanggaran',[DashboardController::class,'list'])->name('list.pelanggaran');
