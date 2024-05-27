<?php

namespace Database\Seeders;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'genre_id' => '1',
            'poster' => 'movie-01.jpg',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength',
        ]);
        Movie::create([
            'id' => 2,
            'title' => 'Spirited away',
            'genre_id' => '2',
            'poster' => 'save-22.jpeg',
            'synopsis' => 'During her familys move to the suburbs, a sullen 10-year-old girl wanders into a world ruled by gods, witches and spirits, and where humans are changed into beasts.',
        ]);
        Movie::create([
            'id' => 3,
            'title' => 'Wind Breaker',
            'genre_id' => '3',
            'poster' => 'movie-03.jpg',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ]);
        Movie::create([
            'id' => 4,
            'title' => 'Howls moving castle',
            'genre_id' => '4',
            'poster' => 'movie-20.jpg',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ]);
        Movie::create([
            'id' => 5,
            'title' => 'My neighbor totoro',
            'genre_id' => '5',
            'poster' => 'save_19.jpeg',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ]);
    }
}
