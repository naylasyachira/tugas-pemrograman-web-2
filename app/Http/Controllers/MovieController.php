<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
         return view('movies.create');
    }

    public function store(Request $request)
    {
        Movie::create([
        'title' => $request->title,
        'genre' => $request->genre,
        'release_year' => $request->release_year,
        'rating' => $request->rating,
        'description' => $request->description
        ]);

    return redirect('/movies');
    }
}