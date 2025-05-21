<?php 
namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // GET /api/genres
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            'status' => 'success',
            'data' => $genres
        ]);
    }

    // POST /api/genres
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan data genre baru
        $genre = Genre::create($validated);

        // Kembalikan response JSON
        return response()->json([
            'status' => 'success',
            'data' => $genre
        ], 201);
    }
}
