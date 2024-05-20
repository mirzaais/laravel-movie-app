<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genre = new Genre();
        $genres = $genre->getAllMovies();

        return view('genres.index', ['genres'=> $genres]);
    }
}
