<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

/*
|--------------------------------------------------------------------------
| Web Routes — Tugas04_Laravel
|--------------------------------------------------------------------------
*/

Route::get('/profil', [ProfilController::class, 'index']);
