<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\RegisController;

Route::get('/portofolio', [PortoController::class, 'index']);
Route::get('/detail/{id}', [PortoController::class, 'detail']);
Route::get('/tabel', [RegisController::class, 'tabel'])->middleware('auth');

// Routes untuk pengguna yang belum login
Route::middleware('guest')->group(function () {
    Route::get('/login', [RegisController::class, 'login']);
    Route::post('/submitlogin', [RegisController::class, 'submitlogin']);
    Route::post('/submit', [RegisController::class, 'submit']);
});


Route::get('/regis', [RegisController::class, 'regis']); //ini haruse masuk di guest, tapi karena paling pingin bikin 2 akun ddi tak

// Routes untuk pengguna yang sudah login
Route::middleware('auth')->group(function () {
    Route::post('/logout', [RegisController::class, 'logout']);
    Route::post('/tambah', [PortoController::class, 'store'])->name('store');
    Route::delete('/delete/{id}', [PortoController::class, 'destroy']);
    Route::get('/edit/{id}', [PortoController::class, 'edit']);
    Route::put('/edit/{id}', [PortoController::class, 'update']);
});
