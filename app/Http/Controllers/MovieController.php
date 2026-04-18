<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('movies.index', [
            'title' => 'Movie',
            'movies' => Movie::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create', [
            'title' => 'Create Movie',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'genre' => 'required|max:100',
            'release_year' => 'required|digits:4|numeric',
            'rating' => 'required|numeric|min:0|max:10',
            'description' => 'nullable|max:500',
        ], [
            'title.required' => 'Judul tidak boleh kosong',
            'title.max' => 'Judul tidak boleh lebih dari :max karakter',

            'genre.required' => 'Genre tidak boleh kosong',

            'release_year.required' => 'Tahun rilis wajib diisi',
            'release_year.digits' => 'Tahun rilis wajib 4 digit',
            'release_year.numeric' => 'Tahun rilis harus angka',

            'rating.required' => 'Rating wajib diisi',
            'rating.numeric' => 'Rating harus angka',
            'rating.min' => 'Rating minimal :min',
            'rating.max' => 'Rating maksimal :max',

            'description.max' => 'Deskripsi maksimal :max karakter',
        ]);

        Movie::create($validated);
        return to_route('movies.index')->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', [
            'title' => 'Edit Movie',
            'movie' => $movie,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'genre' => 'required|max:100',
            'release_year' => 'required|digits:4|numeric',
            'rating' => 'required|numeric|min:0|max:10',
            'description' => 'nullable|max:500',
        ], [
            'title.required' => 'Judul tidak boleh kosong',
            'title.max' => 'Judul tidak boleh lebih dari :max karakter',

            'genre.required' => 'Genre tidak boleh kosong',

            'release_year.required' => 'Tahun rilis wajib diisi',
            'release_year.digits' => 'Tahun rilis wajib 4 digit',
            'release_year.numeric' => 'Tahun rilis harus angka',

            'rating.required' => 'Rating wajib diisi',
            'rating.numeric' => 'Rating harus angka',
            'rating.min' => 'Rating minimal :min',
            'rating.max' => 'Rating maksimal :max',

            'description.max' => 'Deskripsi maksimal :max karakter',
        ]);

        $movie->update($validated);

        return to_route('movies.index')
            ->withSuccess('Data berhasil diubah');
    }
}
