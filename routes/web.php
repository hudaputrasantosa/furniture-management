<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangControllers;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SupplierController;
use App\Models\BarangModel;
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
    $barangs = BarangModel::all();
    return view('homepage',  ['barangs' => $barangs]);
});

Route::get('/cek', function () {
    return view('vendor.invoices.templates.default');
})->name('lihat-invoice');

// AUTHENTIKASI
Route::get('admin/login', [AuthController::class, 'login'])->name('login');
Route::post('login-action', [AuthController::class, 'loginAction'])->name('loginAction');
Route::get('logout-action', [AuthController::class, 'logoutAction'])->name('logoutAction')->middleware('auth');

//BARANG
Route::get('admin/barang', [BarangControllers::class, 'index'])->name('barang')->middleware('auth');
Route::get('barang/show', [BarangControllers::class, 'show'])->name('show');
Route::get('barang/create', [BarangControllers::class, 'create'])->name('create');
Route::post('barang/store', [BarangControllers::class, 'store'])->name('storeBarang');
Route::get('barang/edit/{id}', [BarangControllers::class, 'edit'])->name('edit');
Route::put('barang/update/{id}', [BarangControllers::class, 'update'])->name('updateBarang');
Route::delete('barang/hapus/{id}', [BarangControllers::class, 'destroy'])->name('deleteBarang');

//PENJUALAN
Route::get('admin/penjualan', [PenjualanController::class, 'index'])->name('penjualan');
Route::get('penjualan/create', [PenjualanController::class, 'create'])->name('create-penjualan');
Route::post('penjualan/store', [PenjualanController::class, 'store'])->name('store-penjualan');
Route::get('penjualan/edit/{id}', [PenjualanController::class, 'edit'])->name('edit-penjualan');
Route::put('penjualan/update/{id}', [PenjualanController::class, 'update'])->name('update-penjualan');
Route::delete('penjualan/hapus/{id}', [PenjualanController::class, 'destroy'])->name('delete-penjualan');
Route::get('penjualan/cetak/{id}', [PenjualanController::class, 'cetak'])->name('cetak-invoice');

//PEMESANAN
// Route::get('admin/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
// Route::get('pemesanan/create', [PemesananController::class, 'create'])->name('create-pemesanan');
// Route::post('pemesanan/store', [PemesananController::class, 'store'])->name('store-pemesanan');

//LAPORAN KEUANGAN
Route::get('admin/keuangan', [KeuanganController::class, 'index'])->name('keuangan');
Route::get('admin/invoice', [KeuanganController::class, 'invoice'])->name('invoice');

//PEMBELIAN STOK BARANG
Route::get('admin/pembelian', [PembelianController::class, 'index'])->name('pembelian');
Route::get('pembelian/create', [PembelianController::class, 'create'])->name('create-pembelian');
Route::post('pembelian/store', [PembelianController::class, 'store'])->name('store-pembelian');
Route::get('pembelian/edit/{id}', [PembelianController::class, 'edit'])->name('edit-pembelian');
Route::put('pembelian/update/{id}', [PembelianController::class, 'update'])->name('update-pembelian');
Route::delete('pembelian/hapus/{id}', [PembelianController::class, 'destroy'])->name('delete-pembelian');

//SUPPLIER
Route::get('admin/supplier', [SupplierController::class, 'index'])->name('supplier');
Route::get('supplier/create', [SupplierController::class, 'create'])->name('create-supplier');
Route::post('supplier/store', [SupplierController::class, 'store'])->name('store-supplier');
Route::get('supplier/edit/{id}', [SupplierController::class, 'edit'])->name('edit-supplier');
Route::put('supplier/update/{id}', [SupplierController::class, 'update'])->name('update-supplier');
Route::delete('supplier/hapus/{id}', [SupplierController::class, 'destroy'])->name('delete-supplier');


// route::view('/barang', rang');
