@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Tambah Movie 🎬</h2>

    <form action="/movies" method="POST">
        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Genre</label>
            <input type="text" name="genre" class="form-control">
        </div>

        <div class="mb-3">
            <label>Year</label>
            <input type="number" name="release_year" class="form-control">
        </div>

        <div class="mb-3">
            <label>Rating</label>
            <input type="number" name="rating" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

    </form>
@endsection
