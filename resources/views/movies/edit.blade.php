@extends('layouts.app')

@section('content')
    <h2>Edit Movie</h2>

    <form action="/movies/{{ $movie->id }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $movie->title }}" class="form-control mb-2">
        <input type="text" name="genre" value="{{ $movie->genre }}" class="form-control mb-2">
        <input type="number" name="release_year" value="{{ $movie->release_year }}" class="form-control mb-2">
        <input type="number" name="rating" value="{{ $movie->rating }}" class="form-control mb-2">
        <textarea name="description" class="form-control mb-2">{{ $movie->description }}</textarea>

        <button class="btn btn-primary">Update</button>
    </form>
@endsection
