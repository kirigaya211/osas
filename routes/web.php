<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('dashboard', dashboardController::class);

Route::get('/overview', [dashboardController::class, 'overview'])->name('dashboard.overview');
Route::get('/pending', [dashboardController::class, 'pending'])->name('dashboard.pending');