@extends('backoffice.layouts.app');

@section('title-head')
    Edicion de libros - Backoffice
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item"><a href="#">Libros</a></li>
<li class="breadcrumb-item active" aria-current="page">Editar</li>
@endsection

@section('title')
    Editar libro
@endsection

@section('content')
<form action="/dashboard/{{ $book->id }}" method="POST">
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
        <option @selected($book->genre_id == 1) value="1">Novela</option>
        <option @selected($book->genre_id == 2) value="2">Cuentos</option>
        <option @selected($book->genre_id == 3) value="3">Historia</option>
        <option @selected($book->genre_id == 4) value="4">Poesia</option>
        <option @selected($book->genre_id == 5) value="5">Biografia</option>
      </select>
    </div>
    <div class="form-group">
      <label for="released_date">Imagen</label>
      <input value="{{ $book->image }} type="text" class="form-control" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary mt-2" class="form-control">Guardar</button>
    <a href="/dashboard" class="btn btn-primary mt-2 ml-6" style="margin-left: 20px;">Volver al listado</a>
</form>

@endsection

