<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

Route::middleware('api')->group(function () {
    // GET: Read all data
    Route::get('/books', [BookController::class, 'index']);
    Route::get('/authors', [AuthorController::class, 'index']);
    Route::get('/genres', [GenreController::class, 'index']);

    // POST: Create new data
    Route::post('/authors', [AuthorController::class, 'store']);
    Route::post('/genres', [GenreController::class, 'store']);
});
