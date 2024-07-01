@extends('web.layouts.appWeb')

@section('title-head')
    Libreria BAB  
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-2">
                <div class="card-header">
                    <h1 class="card-title">{{ $book->title }}</h1>
                </div>
                <div class="card-body">
                    <img src="/storage/{{ $book?->image?->src }}" class="card-img-top mx-auto d-block img-thumbnail" alt="Portada del libro" style="max-width: 250px;">

                    <h3 class="card-text">{{ $book->autor }}</h3>
                    <p class="card-text">{{ $book->description }}</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Precio:</strong> ${{ $book->price }}</li>
                        <li class="list-group-item"><strong>Año:</strong> {{ $book->released_date }}</li>
                        <li class="list-group-item"><strong>Género:</strong> {{ $book->genre->value }}</li>
                    </ul>
                </div>
                <div class="card-footer text-right">
                    <form action="/cart/add/{{ $book->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success mt-2" name="submit">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center mt-4 mb-4">
    <a href="{{ route('web.books.index') }}" class="btn btn-primary">Volver al listado</a>
</div>
@endsection




