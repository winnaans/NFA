<?php

// app/Http/Controllers/AuthorController.php
namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::allAuthors();
        return view('author.index', compact('authors'));
    }
}
