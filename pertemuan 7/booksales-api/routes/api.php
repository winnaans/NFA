<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

// ---------------------- PUBLIC ROUTES ---------------------- //
// Route public: hanya 'index' dan 'show' (tanpa login)
Route::apiResource('authors', AuthorController::class)->only(['index', 'show']);
Route::apiResource('genres', GenreController::class)->only(['index', 'show']);
Route::get('books', [BookController::class, 'index']); // Read All Books

// ---------------------- ADMIN ROUTES ---------------------- //
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::apiResource('authors', AuthorController::class)->only(['store', 'update', 'destroy']);
    Route::apiResource('genres', GenreController::class)->only(['store', 'update', 'destroy']);
    Route::delete('books/{book}', [BookController::class, 'destroy']); // Hapus buku hanya admin
});

// ---------------------- CUSTOMER ROUTES ---------------------- //
Route::middleware(['auth:sanctum', 'customer'])->group(function () {
    Route::get('books/{book}', [BookController::class, 'show']);    // Lihat detail buku
    Route::post('books', [BookController::class, 'store']);         // Tambah buku
    Route::put('books/{book}', [BookController::class, 'update']);  // Update buku
});
