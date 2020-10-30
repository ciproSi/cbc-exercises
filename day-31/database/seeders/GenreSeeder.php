<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Genre::truncate();
        
        $genres = [
            'Romance',
            'Fantasy',
            'S&F',
            'Detective stories',
            'Porn stories',
            'Biography',
            'Stories'
        ];

        foreach ($genres as $genre) {
            $new_genre = new Genre;
            $new_genre->name = $genre;
            $new_genre->slug = Str::slug($genre);
            $new_genre->save();
        }

    }
}
