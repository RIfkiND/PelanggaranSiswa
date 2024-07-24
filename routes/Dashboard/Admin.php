<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\Resources\PelanggaranController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Api\SearchController;



// Route::get('/Admin', [DashboardController::class, 'admindashboard'])->name('AdminDashboard');
Route::get('/Admin', App\Livewire\Admin\Dashboard::class)->name('AdminDashboard');
Route::get('/Table', App\Livewire\Admin\Laporan::class)->name('list.table');
Route::controller(DashboardController::class)->prefix('/acces')->group(function () {
    Route::get('/list-pelanggaran', 'list')->name('list.pelanggaran');
    Route::get('/siswa', 'siswashow')->name('list.siswa');
    Route::get('/histoy', 'history')->name('list.history');
});



//Route::get('/Admin/Dashboard/list-pelanggaran',[DashboardController::class,'list'])->name('list.pelanggaran');


Route::resource('/Admin/do', PelanggaranController::class)->names([
    'create' => 'add.form',      // GET
    'store' => 'store.pelanggaran',    // POST
    'edit' => 'edit.pelanggaran',      // GET
    'update' => 'update.pelanggaran',  // PUT/PATCH
    'destroy' => 'delete.pelanggaran', // DELETE
]);

Route::get('/search/siswa', [SearchController::class, 'search'])->name('search');
Route::get('/search/pelanggaran', [SearchController::class, 'search2'])->name('search.pelanggaran');
