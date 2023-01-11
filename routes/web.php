<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangControllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

// AUTHENTIKASI
Route::get('admin/login', [AuthController::class, 'login'])->name('login');
Route::post('login-action', [AuthController::class, 'loginAction'])->name('loginAction');
Route::get('admin/barang', [BarangControllers::class, 'index'])->name('barang')->middleware('auth');
Route::get('logout-action', [AuthController::class, 'logoutAction'])->name('logoutAction')->middleware('auth');
