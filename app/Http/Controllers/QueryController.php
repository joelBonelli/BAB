<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function whereComplejo(){

        $filter = request()->input('filter');
        $search = request()->input('search');
        $noResult = false;
       
        if ($filter == 'opcion1') {
            $books = Book::where('title', 'like', '%'.$search.'%')->get();
        } else {
            $books = Book::all();
        }
        $noResult = $books->isEmpty();
        return view('web.books.index', compact('books', 'noResult'));




        // if ($filter == 'opcion1') {
        //     $books = Book::where('title', 'LIKE','%'. $search.'%')->get();

        //     if ($books->isEmpty()) {
        //         echo 'No hay resultados';
        //     } else {
        //         return view('web.books.index', compact('books'));
        //     }
        // } else {
        //     $books = Book::all();
        //     return view('web.books.index', compact('books'));
        // }





        // para lo opcion 2
        // if ($filter == 'opcion2') {
        //     $year = $search;
        //     $startDate = $year . '-01-01';
        //     $endDate = $year . '-12-31';
        //     $books = Book::whereBetween('released_date', [$startDate, $endDate])->get();
        //     return view('web.books.index', compact('books'));
        // }

        
       
        
    }

//     public function whereSimple(){

//         $books = Book::where('released_date', '>=', '2000-01-01')->get();
//        // dd($books)->get();

//        return view('web/queries', compact('books'));

//    }









}
