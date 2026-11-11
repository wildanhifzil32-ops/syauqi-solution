<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Pelanggan\DashboardController as PelangganDashboard;
use App\Http\Controllers\Pengelola\DashboardController as PengelolaDashboard;

Route::get('/', function () {
    return redirect('/admin/dashboard');
});

Route::get('/admin/dashboard', [AdminDashboard::class, 'index']);

Route::get('/pelanggan/dashboard', [PelangganDashboard::class, 'index']);

Route::get('/pengelola/dashboard', [PengelolaDashboard::class, 'index']);
