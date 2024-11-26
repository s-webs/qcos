<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return redirect()->to(route('login'));
});
Route::get('/terminal', [\App\Http\Controllers\GuestController::class, 'terminal'])->name('terminal');
Route::get('/monitoring', [\App\Http\Controllers\GuestController::class, 'monitoring'])->name('monitoring');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('category', [\App\Http\Controllers\AdminController::class, 'category'])->name('category');
    Route::post('category', [\App\Http\Controllers\AdminController::class, 'addCategory'])->name('addCategory');
    Route::patch('category/{id}/update', [\App\Http\Controllers\AdminController::class, 'updateCategory'])->name('updateCategory');
    Route::delete('category/{id}/delete', [\App\Http\Controllers\AdminController::class, 'deleteCategory'])->name('deleteCategory');
    Route::get('tables', [\App\Http\Controllers\AdminController::class, 'tables'])->name('tables');
    Route::post('tables', [\App\Http\Controllers\AdminController::class, 'createTable'])->name('createTable');
    Route::delete('tables/{id}/delete', [\App\Http\Controllers\AdminController::class, 'deleteTable'])->name('deleteTable');
    Route::patch('table/{id}/update', [\App\Http\Controllers\AdminController::class, 'updateTable'])->name('updateTable');
});
