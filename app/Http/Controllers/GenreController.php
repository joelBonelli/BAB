<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function byGenre($id){

        $books = Book::where('genre_id','=', $id)->get();
        return view('web.books.genres', compact('books'));
}
}
