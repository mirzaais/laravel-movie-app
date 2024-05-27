<?php

namespace Database\Seeders;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' =>'1',
            'user' => 'nanaaa1309@gmail.com',
            'rating' => '★★★★',
            'date' => '25 05 2030'
        ]);
        Review::create([
            'id' => 2,
            'movie_id' =>'2',
            'user' => 'monaa@gmail.com',
            'rating' => '★★★★★★',
            'date' => '25 12 2000'
        ]);
        Review::create([
            'id' => 3,
            'movie_id' =>'3',
            'user' => 'jays18@gmail.com',
            'rating' => '★★★★',
            'date' => '12 10 2034'
        ]);
        Review::create([
            'id' => 4,
            'movie_id' =>'4',
            'user' => 'bisma50@gmail.com',
            'rating' => '★★★★★★★',
            'date' => '21 11 2022'
        ]);
        Review::create([
            'id' => 5,
            'movie_id' =>'5',
            'user' => 'bruunooo@gmail.com',
            'rating' => '★★★★★★',
            'date' => '13 03 1999'
        ]);
    }
}
