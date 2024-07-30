@extends('web.layouts.appWeb')

@section('title-head')
    Libreria BAB - Listado de libros 
@endsection

@section('title')
    <div class="d-flex justify-content-between">
        <u>Listado de Libros</u>
        <a href="web/books/checkout" class="btn btn-warning">MI CARRITO</a>
    </div>
@endsection

@section('content')
<div class="container">
    <div class="container mb-0">
            <h4>Géneros</h4>
    </div>
    <div class="container d-flex justify-content-between align-items-center mt-0 mb-4">

        <p class="mb-0">
            @foreach($genres as $genre)
                <a href="/genres/{{ $genre->id }}">{{ $genre->value }}</a>@if (!$loop->last) || @endif
            @endforeach
        </p>     
    </div>
    <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
        <thead class="table-dark">
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Año</th>
                <th scope="col">Género</th>
                <th scope="col">Portada</th>
            </tr>
        </thead>

        <tbody>                                 
            @foreach ($books as $book)
            <tr>          
                <td><a href=" /books/{{ $book->id }} "> {{ $book->title }}</a></td>
                <td> {{ $book->autor }}</td>
                <td> {{ $book->description }}</td>
                <td>{{ $book->price }}</td> 
                <td>{{ $book->released_date }}</td> 
                <td><a href="/genres/{{ $book->genre->id }}">{{ $book->genre->value}}</a></td>
                {{-- <td>{{ $book->genre->value }}</td> --}}
                <td><img src="/storage/{{ $book?->image?->src }}" alt="Portada del librosABATOS" class="img-thumbnail" style="max-width: 80px;"></td>
               

            </tr>
                @endforeach
        </tbody>
    </table>
</div>
{{ $books->links() }}
@endsection

