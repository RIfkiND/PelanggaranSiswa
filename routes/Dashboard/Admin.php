<?php
use App\Http\Controllers\Admin\Dashboard\PelanggaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DashboardController;


Route::controller(DashboardController::class)->prefix('/Admin/Dashboard')->group(function(){
    Route::get('/list-pelanggaran' ,'list')->name('list.pelanggaran');
    Route::get('/siswa', 'siswashow')->name('list.siswa');
    Route::get('/histoy','history')->name('list.history');
});
//Route::get('/Admin/Dashboard/list-pelanggaran',[DashboardController::class,'list'])->name('list.pelanggaran');


Route::resource('/Admin/do',PelanggaranController::class)->names([
    'create'=>'add.form',//get
    'store'=>'store.pelaggaran',//post
    'update'=> 'edit.pelanggaran',//put
    'destroy'=>'delete.pelanggaran',//delete
]);
