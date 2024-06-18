<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {

        $books = Book::all();
        $genres = Genre::all();

        return view('web.books.index', compact('books', 'genres'));
    }

    
    public function show($id) {

        $book = Book::find($id);

        return view('web.books.show', compact('book'));
    }

   




}
