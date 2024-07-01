@extends('backoffice.layouts.app')

@section('title-head')
    Edicion de libros - Backoffice
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item"><a href="/dashboard">Libros</a></li>
<li class="breadcrumb-item active" aria-current="page">Editar</li>
@endsection

@section('title')
    Editar libro
@endsection

@section('content')
<form action="/dashboard/{{ $book->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="title">Titulo</label>
    <input value="{{ $book->title }}" type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="autor">Autor</label>
    <input value="{{ $book->autor }}" type="text" class="form-control" id="autor" name="autor">
  </div>
  <div class="form-group">
    <label for="description">Descripcion</label>
    <input value="{{ $book->description }}" type="text" class="form-control" id="description" name="description">
  </div>
  <div class="form-group">
      <label for="price">Precio</label>
      <input value="{{ $book->price }}" type="number" class="form-control" id="price" name="price">
    </div>
    <div class="form-group">
      <label for="released_date">Año</label>
      <input value="{{ $book->released_date }}" type="date" class="form-control" id="released_date" name="released_date">
    </div>
    <div class="form-group">
      <label for="genre_id">Genero</label>
      <select class="form-control" name="genre_id" id="genre_id">
        @foreach($genres as $genre)
        <option value="{{$genre->id}}" {{ $genre->id == $book->genre_id ? 'selected' : '' }}>{{$genre->value}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">

      <div class="form-group">
        <label for="image">Imagen</label>
        @if ($book->image)
        <img style="max-width: 80px;margin-top: 10px; margin-bottom: 15px;" src="/storage/{{ $book?->image?->src }}" alt="">
        @endif
        <input type="file" class="form-control" id="image" name="image">
      </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2" class="form-control">Guardar</button>
    <a href="/dashboard" class="btn btn-primary mt-2 ml-6" style="margin-left: 20px;">Volver al listado</a>
</form>

@endsection

