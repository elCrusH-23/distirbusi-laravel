<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelanganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BarangController;
Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan daftar produk
Route::get('/pelangan', [PelanganController::class, 'index'])->name('pelangan.index');

// Route untuk menampilkan formulir tambah produk
Route::get('/pelangan/create', [PelanganController::class, 'create'])->name('pelangan.create');

// Route untuk menyimpan produk baru
Route::post('/pelangan', [PelanganController::class, 'store'])->name('pelangan.store');

// Route untuk menampilkan detail produk berdasarkan ID
Route::get('/pelangan/{id}', [PelanganController::class, 'show'])->name('pelangan.show');

// Route untuk menampilkan formulir edit produk berdasarkan ID
Route::get('/pelangan/{id}/edit', [PelanganController::class, 'edit'])->name('pelangan.edit');

// Route untuk memperbarui produk berdasarkan ID
Route::put('/pelangan/{id}', [PelanganController::class, 'update'])->name('pelangan.update');

// Route untuk menghapus produk berdasarkan ID
Route::delete('/pelangan/{id}', [PelanganController::class, 'destroy'])->name('pelangan.destroy');

// Route untuk menampilkan daftar penjualan
Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');

// Route untuk menampilkan formulir tambah penjualan
Route::get('/penjualan/create', [PenjualanController::class, 'create'])->name('penjualan.create');

// Route untuk menyimpan penjualan baru
Route::post('/penjualan', [PenjualanController::class, 'store'])->name('penjualan.store');

// Route untuk menampilkan detail produk berdasarkan ID
Route::get('/penjualan/{id}', [PenjualanController::class, 'show'])->name('penjualan.show');

// Route untuk menampilkan formulir edit produk berdasarkan ID
Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit'])->name('penjualan.edit');

// Route untuk memperbarui produk berdasarkan ID
Route::put('/penjualan/{id}', [PenjualanController::class, 'update'])->name('penjualan.update');

// Route untuk menghapus produk berdasarkan ID
Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy');

// Route untuk menampilkan daftar barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');

// Route untuk menampilkan formulir tambah penjualan
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');

// Route untuk menyimpan penjualan baru
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');

// Route untuk menampilkan detail produk berdasarkan ID
Route::get('/barang/{id}', [BarangController::class, 'show'])->name('barang.show');

// Route untuk menampilkan formulir edit produk berdasarkan ID
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');

// Route untuk memperbarui produk berdasarkan ID
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');

// Route untuk menghapus produk berdasarkan ID
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');