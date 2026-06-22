<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes — Tugas05_Laravel
|--------------------------------------------------------------------------
*/

Route::get('/about', [AboutController::class, 'index']);
