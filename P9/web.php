<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SatuanController;

/*
|--------------------------------------------------------------------------
| Web Routes — Tugas09_Laravel
|--------------------------------------------------------------------------
*/

Route::get('/barang',   [BarangController::class,   'index'])->name('barang.index');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index');
Route::get('/satuan',   [SatuanController::class,   'index'])->name('satuan.index');
