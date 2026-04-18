@extends('layouts.app')

@section('content')
    {{-- read feature --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Movie</h2>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-striped table-hover align-middle">
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
                    @forelse($movies as $movie)
                        <tr>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->genre }}</td>
                            <td>{{ $movie->release_year }}</td>
                            <td>
                                <span class="badge bg-success">
                                    {{ $movie->rating }}
                                </span>
                            </td>
                            <td>{{ $movie->description }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                Belum ada data
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>
@endsection
