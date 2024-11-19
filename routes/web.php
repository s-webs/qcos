<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\GuestController::class, 'terminal'])->name('terminal');
Route::get('/monitoring', [\App\Http\Controllers\GuestController::class, 'monitoring'])->name('monitoring');


Route::get('dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('category', [\App\Http\Controllers\AdminController::class, 'category'])->name('category');
Route::get('tables', [\App\Http\Controllers\AdminController::class, 'tables'])->name('tables');

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return Inertia::render('Dashboard');
//    })->name('dashboard');
//});
