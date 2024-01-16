<?php
use App\Http\Controllers\Admin\Dashboard\PelanggaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DashboardController;



Route::get('/Admin/Dashboard/list-pelanggaran',[DashboardController::class,'list'])->name('list.pelanggaran');

Route::resource('/Admin/do',PelanggaranController::class)->names([
    'create'=>'add.form',//get
    'store'=>'store.pelaggaran',//post
    'update'=> 'edit.pelanggaran',//put
    'destroy'=>'delete.pelanggaran',//delete
]);
