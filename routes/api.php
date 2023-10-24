<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelanganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BarangController;

// Route untuk menampilkan daftar produk
Route::get('/list-pelangan', [PelanganController::class, 'list_pelangan']);

// Route untuk menampilkan detail produk
Route::get('/detail-pelangan/{id}', [PelanganController::class, 'detail_pelangan']);

// Route untuk menyimpan produk baru
Route::post('/create-pelangan', [PelanganController::class, 'create_pelangan']);

// Route untuk mengupdate produk
Route::put('/update-pelangan/{id}', [PelanganController::class, 'update_pelangan']);

// Route untuk menghapus produk
Route::delete('/delete-pelangan/{id}', [PelanganController::class, 'delete_pelangan']);

// Route untuk menampilkan daftar produk
Route::get('/list-penjualan', [PenjualanController::class, 'list_penjualan']);

// Route untuk menampilkan detail produk
Route::get('/detail-penjualan/{id}', [PenjualanController::class, 'detail_penjualan']);

// Route untuk menyimpan produk baru
Route::post('/create-penjualan', [PenjualanController::class, 'create_penjualan']);

// Route untuk mengupdate produk
Route::put('/update-penjualan/{id}', [PenjualanController::class, 'update_penjualan']);

// Route untuk menghapus produk
Route::delete('/delete-penjualan/{id}', [PenjualanController::class, 'delete_penjualan']);

// Route untuk menampilkan daftar produk
Route::get('/list-barang', [BarangController::class, 'list_barang']);

// Route untuk menampilkan detail produk
Route::get('/detail-barang/{id}', [BarangController::class, 'detail_barang']);

// Route untuk menyimpan produk baru
Route::post('/create-barang', [BarangController::class, 'create_barang']);

// Route untuk mengupdate produk
Route::put('/update-barang/{id}', [BarangController::class, 'update_barang']);

// Route untuk menghapus produk
Route::delete('/delete-barang/{id}', [BarangController::class, 'delete_barang']);