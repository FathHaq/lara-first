<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    $user = DB::table('users')->get();
    return dd($user);
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/tambah-user', [DashboardController::class, 'insert'])->name('tambah-user');

Route::post('/tambah-user', [DashboardController::class, 'store'])->name('tambah-user.store');






