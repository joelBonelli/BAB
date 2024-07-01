<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\Backoffice\AdminController;
use App\Http\Controllers\QueryController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

// WEB

Route::get('/',[BookController::class, 'index'])->name('web.books.index');
Route::get('genres/{id}', [BookController::class, 'byGenre'])->name('web.books.genres');
Route::get('books/{id}', [BookController::class, 'show']) -> name('web.books.show');
Route::post('cart/add/{id}', [BookController::class, 'add'])->middleware('auth');
Route::get('cart/remove/{id}', [BookController::class, 'remove']);
Route::post('cart/buy', [BookController::class, 'removeAll'])->middleware('auth');
Route::get('web/books/ticket', [BookController::class, 'ticket']);
Route::get('web/books/checkout', [BookController::class, 'checkout'])->middleware('auth');


// Queries
// Route::get('where-simple', [QueryController::class, 'whereSimple']);



// BACKOFFICE

Route::get('dashboard',[AdminController::class,'index'])->middleware('auth');
Route::get('dashboard/create', [AdminController::class, 'create'])->middleware('auth');
Route::post('dashboard', [AdminController::class, 'store'])->middleware('auth');
Route::get('dashboard/{id}/edit', [AdminController::class, 'edit'])->middleware('auth');
Route::post('dashboard/{id}', [AdminController::class, 'update'])->middleware('auth');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
