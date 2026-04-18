@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Daftar Movie</h2>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <a href="/movies/create" class="btn btn-success mb-3">
        + Tambah Movie
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <td>
                </td>
                <th>Title</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Rating</th>
                <th>Description</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>
                    </td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->genre }}</td>
                    <td>{{ $movie->release_year }}</td>
                    <td>{{ $movie->rating }}</td>
                    <td>{{ $movie->description }}</td>
                    <td>
                        <a href="{{ route('movies.edit', $movie) }}" class="btn btn-warning btn-sm mb-3">
                            Edit
                        </a>

                        <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin mau hapus?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
