<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Image;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $books = Book::all();

        return view('backoffice.index', compact('books'));
    }

    public function create() {

        $genres = Genre::all();

        return view('backoffice.create', compact('genres'));
    }

    public function store() {

        $book = new Book;

        // request()->file('image')->getSize();
        // request()->file('image')->getClientOriginalExtension();
        // request()->file('image')->store('books');
        // request()->file('image')->storeAs('books/fotito.jpg');

        // Subir imagen y recuperar el src
        $size = request()->file('image')->getSize();
        $extension = request()->file('image')->getClientOriginalExtension();
        $src = request()->file('image')->store('books');
        $image = new Image();
        $image->size = $size;
        $image->extension = $extension;
        $image->src = $src;
        $image->save();
        //$image->id;
    
        $book->title = request()->input('title');
        $book->autor = request()->input('autor');
        $book->description = request()->input('description');
        $book->price = request()->input('price');
        $book->released_date = request()->input('released_date');
        $book->genre_id = request()->input('genre_id');
        $book->image_id = $image->id;
        $book->save();

        return redirect('dashboard');
    }
    
    public function edit($id) {

        $book = Book::find($id);
        $genres = Genre::all();

        return view('backoffice.edit', compact('book', 'genres'));
    }

    public function update($id) {

        $book = Book::find($id);  

        $size = request()->file('image')->getSize();
        $extension = request()->file('image')->getClientOriginalExtension();
        $src = request()->file('image')->store('books');
        $image = new Image();
        $image->size = $size;
        $image->extension = $extension;
        $image->src = $src;

        $book->title = request()->input('title');
        $book->autor = request()->input('autor');
        $book->description = request()->input('description');
        $book->price = request()->input('price');
        $book->released_date = request()->input('released_date');
        $book->genre_id = request()->input('genre_id');
        $book->image_id = $image->id;
        $book->save();

        return redirect('dashboard');
    }
    
}
