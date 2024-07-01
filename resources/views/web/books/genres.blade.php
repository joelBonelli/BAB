@extends('web.layouts.appWeb')

@section('title-head')
    Libreria BAB - Generos
@endsection

@section('content')
@foreach($genres as $genre)
<h3 class="container my-3" id="titulo">Listado de Libros: Género {{ $genre->value }}</h3>
@endforeach
{{-- //<h3 class="container my-3" id="titulo">Listado de Libros: Genero {{ $genre->value }}</h3> --}}
<div class="container">          
    
    <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
        <thead class="table-dark">
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Año</th>
                <th scope="col">Genero</th>
                <th scope="col">Portada</th>
            </tr>
        </thead>

        <tbody>    
            @if ($books->isEmpty())
                <tr>
                    <td colspan="7">No hay resultados</td>
                </tr>
            @else
                
            @foreach ($books as $book)
            <tr>          
                <td><a href=" /books/{{ $book->id }} "> {{ $book->title }}</a></td>
                <td> {{ $book->autor }}</td>
                <td> {{ $book->description }}</td>
                <td>{{ $book->price }}</td> 
                <td>{{ $book->released_date }}</td> 
                <td>{{ $book->genre->value }}</td>
                <td><img src="/storage/{{ $book?->image?->src }}" alt="Portada del libro" class="img-thumbnail" style="max-width: 80px;"></td>
            </tr>
            @endforeach
            @endif            
        </tbody>
    </table>
</div>
<div class=" text-center mt-4">
    <a href="{{ route('web.books.index') }}" class="btn btn-primary mb-4">Volver al listado</a>
</div>
@endsection
