<?php
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

Route::prefix('admin')->group(function () {
    Route::resource('genres', GenreController::class);
    Route::resource('authors', AuthorController::class);
});

// Tambahkan ini untuk routing React
Route::view('/{any}', 'app')->where('any', '.*');