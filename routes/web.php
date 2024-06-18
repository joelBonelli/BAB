<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\Backoffice\AdminController;
use App\Http\Controllers\QueryController;

// Route::get('/', function () {
//     return view('welcome');
// });

// WEB

Route::get('/',[BookController::class, 'index'])->name('web.books.index');
Route::get('genres/{id}', [GenreController::class, 'byGenre'])->name('web.books.genres');
Route::get('books/{id}', [BookController::class, 'show']) -> name('web.books.show');

// Queries
// Route::get('where-simple', [QueryController::class, 'whereSimple']);



// BACKOFFICE

Route::get('dashboard',[AdminController::class,'index']);
Route::get('dashboard/create', [AdminController::class, 'create']);
Route::post('dashboard', [AdminController::class, 'store']);
Route::get('dashboard/{id}/edit', [AdminController::class, 'edit']);
Route::post('dashboard/{id}', [AdminController::class, 'update']);



