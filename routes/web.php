<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::get('/', [ProductController::class, 'home']); // Halaman Home

// Route untuk halaman dashboard dengan middleware auth dan verified
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk profile dengan middleware auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk produk
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index']); // Halaman Daftar Produk
    Route::get('/create', [ProductController::class, 'create']); // Halaman Buat Produk
    Route::post('/', [ProductController::class, 'store']); // Proses Simpan Produk
    Route::get('/{id}', [ProductController::class, 'show']); // Halaman Detail Produk
    Route::get('/{id}/edit', [ProductController::class, 'edit']); // Halaman Edit Produk
    Route::put('/{id}', [ProductController::class, 'update']); // Proses Update Produk
    Route::delete('/{id}', [ProductController::class, 'destroy']); // Proses Hapus Produk
});

// Route untuk halaman aplikasi
Route::get('/app', [ProductController::class, 'app']); // Halaman Aplikasi

require __DIR__.'/auth.php';
