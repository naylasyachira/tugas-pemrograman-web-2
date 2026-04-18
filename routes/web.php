<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

// HOME
Route::get('/', [MovieController::class, 'index'])->name('movies.index');

// READ
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

// CREATE
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies/store', [MovieController::class, 'store'])->name('movies.store');

// EDIT
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');

//DELETE
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');