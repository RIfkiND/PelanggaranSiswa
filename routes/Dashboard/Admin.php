<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\Resources\PelanggaranController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Api\SearchController;


// Route::controller(DashboardController::class)->prefix('/Admin/Dashboard')->group(function(){
//     Route::get('/list-pelanggaran' ,'list')->name('list.pelanggaran');
//     Route::get('/siswa', 'siswashow')->name('list.siswa');
//     Route::get('/histoy','history')->name('list.history');
//     Route::get('/table/all','table')->name('list.table');
// });
// //Route::get('/Admin/Dashboard/list-pelanggaran',[DashboardController::class,'list'])->name('list.pelanggaran');


// Route::resource('/Admin/do', PelanggaranController::class)->names([
//     'create' => 'add.form',      // GET
//     'store' => 'store.pelanggaran',    // POST
//     'edit' => 'edit.pelanggaran',      // GET
//     'update' => 'update.pelanggaran',  // PUT/PATCH
//     'destroy' => 'delete.pelanggaran', // DELETE
// ]);

// Route::get('/search/siswa',[SearchController::class,'search'])->name('search');
// Route::get('/search/pelanggaran',[SearchController::class,'search2'])->name('search.pelanggaran');
