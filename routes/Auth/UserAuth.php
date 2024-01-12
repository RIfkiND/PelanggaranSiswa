<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;


Route::prefix('Auth')->group(function(){
    Route::get('/Login',[LoginController::class,'LoginVIew'])->name('LoginView');
    Route::get('/Register',[RegisterController::class,'RegisterView'])->name('RegisterView');
    Route::post('/login',[LoginController::class,'Login'])->name('Login');
    Route::post('/Register',[RegisterController::class,'Store'])->name('Register');
});
