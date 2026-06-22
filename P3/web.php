<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes — Tugas03_Laravel
|--------------------------------------------------------------------------
*/

Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
