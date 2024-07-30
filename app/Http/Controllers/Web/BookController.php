<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Ramsey\Uuid\Exception\DceSecurityException;

use function Ramsey\Uuid\v1;

class BookController extends Controller
{
    public function index() {
        $books = Book::paginate(4);
        $genres = Genre::all();
        
        return view('web.books.index', compact('books', 'genres'));
        
    }

    
    public function show($id) {
        $book = Book::find($id);
        return view('web.books.show', compact('book'));
    }

    public function byGenre($id){

        $books = Book::where('genre_id','=', $id)->get();
        $genres = Genre::where('id',$id)->get();
        
        return view('web.books.genres', compact('books', 'genres'));
    }

    public function add($id)  {
        if (session()->has('cart')) {
            $ids = session('cart');
            $ids[] = $id;
            session(['cart'=> $ids]);
        }else {
            session(['cart' => [$id]]);
        }
        return redirect('web/books/checkout'); 
    }

    public function remove($id){
        $ids = session('cart');

        $ids = array_filter($ids, function ($current_id) use ($id){
            return $current_id != $id;
        });

        session(['cart' => $ids]);
        return redirect('web/books/checkout'); 
    }

    public function removeAll() {
        session(['cart' =>[]]);

        return redirect('web/books/ticket');
    }

    public function checkout(){
        $books = Book::whereIn('id',session('cart',[]))->get();

        return view('web/books/checkout', compact('books'));
    }

    public function ticket() {
        return view('web/books/ticket');
    }

}
