<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UmkmController;  // Tambahkan baris ini!
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PendaftaranController; // Tambahkan baris ini!

Route::get('/', fn() => view('beranda'));
Route::get('/pendaftaran', fn() => view('pendaftaran'));
Route::get('/produk', fn() => view('produk'));
Route::get('/artikel', fn() => view('artikel'));
Route::get('/kontak', fn() => view('kontak'));
Route::get('/login', fn() => view('login'));

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth.umkm');
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/profil', [UmkmController::class, 'profil'])->middleware('auth.umkm');
Route::post('/profil/update', [UmkmController::class, 'updateProfil'])->middleware('auth.umkm')->name('profil.update');

Route::get('/produk-saya', [ProdukController::class, 'index'])->middleware('auth.umkm');
Route::get('/produk-saya/tambah', [ProdukController::class, 'create'])->middleware('auth.umkm');
Route::post('/produk-saya', [ProdukController::class, 'store'])->middleware('auth.umkm');
Route::get('/produk-saya/{produk}/edit', [ProdukController::class, 'edit'])->middleware('auth.umkm');
Route::post('/produk-saya/{produk}', [ProdukController::class, 'update'])->middleware('auth.umkm');
Route::delete('/produk-saya/{produk}', [ProdukController::class, 'destroy'])->middleware('auth.umkm');

Route::get('/pendaftaran', [UmkmController::class, 'create']);
Route::post('/pendaftaran', [UmkmController::class, 'store'])->name('umkm.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.proses');