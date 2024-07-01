@extends('backoffice.layouts.app')
@section('title-head')
    BAB - Mi Carrito
@endsection

@section('breadcrumb')
{{-- @parent
<li class="breadcrumb-item"><a href="#">Libros</a></li>
<li class="breadcrumb-item active" aria-current="page">Listado</li> --}}
@endsection


@section('title')
<u style="display: block; margin: 0 auto; font-size: 1.2em; font-weight: ;">Tu Carrito</u>
@endsection

@section('content')
<a href="{{ route ('web.books.index')}}" class="btn btn-success mt-2">Agregar Libro</a>

<table class="table table-hover table-bordered my-3" aria-describedby="titulo">
    <thead class="table-dark">
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Precio</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>      
        @if ($books->isEmpty())
        <tr>
            <td colspan="3">No hay libros en el carrito.</td>
        </tr>
        @else
             @foreach ($books as $book)
        <tr>          
            <td> {{ $book->title }}</a></td>
            <td> {{ $book->price }}</td>
            <td><a href="/cart/remove/{{$book->id}}" class="btn btn-danger btn-sm me-1">Eliminar</a></td>         
        </tr>
        @endforeach
        @endif
    </tbody>
</table>

    @if (!$books->isEmpty())
    <div class="container text-center mt-4 mb-4">
        <form action="/cart/buy" method="POST">
            @csrf
            <button type="submit" class="btn btn-warning btn-lg" name="submit">Comprar</button>
        </form>        
    @endif
    
</div>


@endsection