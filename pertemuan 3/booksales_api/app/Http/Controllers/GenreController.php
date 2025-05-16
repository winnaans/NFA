<?php

// app/Http/Controllers/GenreController.php
namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::allGenres();
        return view('genre.index', compact('genres'));
    }
}
