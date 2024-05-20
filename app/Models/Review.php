<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected  $reviews= [
        [
    
            'idem' => 1.2,
            'title' => 'Spirited away',
            'poster' => 'save-22.jpeg',
            'user' => 'bonneds23@gmail.com',
            'rating' => '★★★★★★★',
            'date' => '20 12 2027'
    
        ],

        [
    
            'idem' => 1.3,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'simba12@gmail.com',
            'rating' => '★★★★★',
            'date' => '10 10 2028'
    
        ],

        [
    
            'idem' => 1.4,
            'title' => 'My neighbor totoro',
            'poster' => 'save_19.jpeg',
            'user' => 'Shoun06@gmail.com',
            'rating' => '★★★★★',
            'date' => '20 10 2020'
    
        ],

        [
    
            'idem' => 1.5,
            'title' => 'Nausicaa',
            'poster' => 'save-18.jpeg',
            'user' => 'arkanss@gmail.com',
            'rating' => '★★★★★★',
            'date' => '21 11 2030'
    
        ],
        [
    
            'idem' => 1.6,
            'title' => 'Howls moving castle',
            'poster' => 'movie-20.jpg',
            'user' => 'punch4@gmail.com',
            'rating' => '★★★★★★★★★',
            'date' => '20 05 2089'
    
        ],
        [
    
            'idem' => 1.7,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'nanaaa1309@gmail.com',
            'rating' => '★★★★',
            'date' => '25 05 2029'
    
        ],
      ];
    
      public function getAllMovies()
      {
        return $this->reviews;
      }
}
