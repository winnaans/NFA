<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

// Route API otomatis untuk CRUD Author dan Genre
Route::apiResource('authors', AuthorController::class);
Route::apiResource('genres', GenreController::class);

// Khusus Book hanya index (jika belum ada fitur lain)
Route::get('books', [BookController::class, 'index']);
