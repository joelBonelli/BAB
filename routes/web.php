<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\BookController;
use App\Http\Controllers\Backoffice\AdminController;


Route::get('/', function () {
    return view('welcome');
});

// WEB

Route::get('books',[BookController::class, 'index'])->name('web.books.index');
Route::get('books/{id}', [BookController::class, 'show']) -> name('web.books.show');


// BACKOFFICE

Route::get('dashboard',[AdminController::class,'index']);
Route::get('dashboard/create', [AdminController::class, 'create']);
Route::post('dashboard', [AdminController::class, 'store']);
Route::get('dashboard/{id}/edit', [AdminController::class, 'edit']);
Route::post('dashboard/{id}', [AdminController::class, 'update']);

