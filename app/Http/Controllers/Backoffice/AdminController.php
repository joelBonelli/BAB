<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $books = Book::all();

        return view('backoffice.index', compact('books'));
    }

    public function create() {

        return view('backoffice.create');
    }

    public function store() {

        $book = new Book;

        $book->title = request()->input('title');
        $book->autor = request()->input('autor');
        $book->description = request()->input('description');
        $book->price = request()->input('price');
        $book->released_date = request()->input('released_date');
        $book->genre_id = request()->input('genre_id');
        $book->image = request()->input('image');
        $book->save();

        return redirect('dashboard');
    }

    public function edit($id) {

        $book = Book::find($id);

        return view('backoffice.edit', compact('book'));
    }

    public function update($id) {

        $book = Book::find($id);  
        
        $book->title = request()->input('title');
        $book->autor = request()->input('autor');
        $book->description = request()->input('description');
        $book->price = request()->input('price');
        $book->released_date = request()->input('released_date');
        $book->genre_id = request()->input('genre_id');
        $book->image = request()->input('image');
        $book->save();

        return redirect('dashboard');
    }
    
}
