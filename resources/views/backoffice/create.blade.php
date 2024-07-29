@extends('backoffice.layouts.app')

@section('title-head')
    Carga de libros - Backoffice
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item"><a href="/dashboard">Libros</a></li>
<li class="breadcrumb-item active" aria-current="page">Crear</li>
@endsection

@section('title')
    Cargar nuevo libro
@endsection

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@section('content')
<form action="/dashboard" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="autor">Autor</label>
    <input type="text" class="form-control" id="autor" name="autor">
  </div>
  <div class="form-group">
    <label for="description">Descripcion</label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
  <div class="form-group">
      <label for="price">Precio</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="form-group">
      <label for="released_date">Año</label>
      <input type="date" class="form-control" id="released_date" name="released_date">
    </div>
    <div class="form-group">
      <label for="genre_id">Genero</label>
      <select class="form-control" name="genre_id" id="genre_id">
        @foreach($genres as $genre)
        <option value="{{$genre->id}}">{{$genre->value}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="image">Imagen</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary mt-2" name="submit">Guardar</button>
    <a href="/dashboard" class="btn btn-primary mt-2 ml-6" style="margin-left: 20px;">Volver al listado</a>
 
</form>
@endsection


