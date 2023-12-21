<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendorController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

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
// LOGIN
Route::get('/', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// DATA Vendor
Route::get('/data_pendor', [PendorController::class, 'index'])->name('data_pendor');
Route::get('/create_pendor', [PendorController::class, 'create'])->name('create_pendor');
Route::post('/simpan_pendor', [PendorController::class, 'store'])->name('simpan_pendor');
Route::get('/edit_pendor/{id}', [PendorController::class, 'edit'])->name('edit_pendor');
Route::post('/update_pendor/{id}', [PendorController::class, 'update'])->name('update_pendor');
Route::get('/hapus_pendor/{id}', [PendorController::class, 'destroy'])->name('hapus_pendor');

// DATA barang
Route::get('/Data_Barang', [BarangController::class, 'index'])->name('Data_Barang');
Route::get('/create_barang', [barangController::class, 'create'])->name('create_barang');
Route::post('/simpan_barang', [barangController::class, 'store'])->name('simpan_barang');
Route::get('/edit_barang/{id}', [barangController::class, 'edit'])->name('edit_barang');
Route::post('/update_barang/{id}', [barangController::class, 'update'])->name('update_barang');
Route::get('/hapus_barang/{id}', [barangController::class, 'destroy'])->name('hapus_barang');

// DATA ALTERNATIF
Route::get('/data_alternatif', [AlternatifController::class, 'index'])->name('data_alternatif');
Route::get('/create_alternatif', [AlternatifController::class, 'create'])->name('create_alternatif');
Route::post('/simpan_alternatif', [AlternatifController::class, 'store'])->name('simpan_alternatif');
Route::get('/edit_alternatif/{id}', [AlternatifController::class, 'edit'])->name('edit_alternatif');
Route::post('/update_alternatif/{id}', [AlternatifController::class, 'update'])->name('update_alternatif');
Route::get('/hapus_alternatif/{id}', [AlternatifController::class, 'destroy'])->name('hapus_alternatif');
