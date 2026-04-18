@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Daftar Movie</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Rating</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->genre }}</td>
                    <td>{{ $movie->release_year }}</td>
                    <td>{{ $movie->rating }}</td>
                    <td>{{ $movie->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
