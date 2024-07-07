<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function getGenres()
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

    public function getWordsByGenre(Request $request)
    {
        $genreName = $request->query('genre');
        $genre = Genre::where('name', $genreName)->with('words')->first();

        if (!$genre) {
            return response()->json(['error' => 'Genre not found'], 404);
        }

        $words = $genre->words->shuffle()->take(15); // Shuffle the collection and take 15 random words

        return response()->json($words);
    }
}
