<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

// Route::get('/',[HomeController::class,'home'] )->name('home');
Route::get('/', function () {
    return view('users.index');
});
// Route::view('/dashboard', 'users.table-row');
Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::get('/medicines', [DashboardController::class,'medicines']);
Route::get('/profile', [DashboardController::class,'profile'])->name('profile');
Route::post('/write-prescription', [DashboardController::class,'addPrescription']);
Route::get('/doctors', [DashboardController::class,'doctors']);
Route::get('/logout', [DashboardController::class,'logout']);
Route::view('/data', 'users.empty');
