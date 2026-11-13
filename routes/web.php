<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Pelanggan\DashboardController as PelangganDashboard;
use App\Http\Controllers\Pengelola\DashboardController as PengelolaDashboard;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', function () {
    return redirect('/admin/dashboard');
});

Route::get('/admin/dashboard', [AdminDashboard::class, 'index']);

Route::get('/pelanggan/dashboard', [PelangganDashboard::class, 'index']);

Route::get('/pengelola/dashboard', [PengelolaDashboard::class, 'index']);

// ROUTE CRUD ADMIN
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', CategoryController::class)
        ->names('categories');
});
