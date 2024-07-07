<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $genres = [
            'POLITICS', 'FINANCE', 'CRYPTO', 'ENTERTAINMENT', 'MUSIC', 'ART',
            'FANTASY', 'FAIRY TALE', 'FABLE', 'FICTION IN VERSE', 'FICTION',
            'DRAMA', 'BOOKS', 'HISTORY'
        ];

        foreach ($genres as $genre) {
            Genre::create(['name' => $genre]);
        }
    }
}
