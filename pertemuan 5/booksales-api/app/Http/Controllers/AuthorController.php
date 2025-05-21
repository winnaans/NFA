<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // GET /api/authors
    public function index()
    {
        $authors = Author::all(); // Ambil semua data authors
        return response()->json([
            'status' => 'success',
            'data' => $authors
        ]);
    }

    // POST /api/authors
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan data author baru
        $author = Author::create($validated);

        // Kembalikan response JSON
        return response()->json([
            'status' => 'success',
            'data' => $author
        ], 201);
    }
}
