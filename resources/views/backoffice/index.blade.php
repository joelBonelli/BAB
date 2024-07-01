@extends('backoffice.layouts.app')
@section('title-head')
    Listado de libros - Backoffice
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item"><a href="/dashboard">Libros</a></li>
<li class="breadcrumb-item active" aria-current="page">Listado</li>
@endsection


@section('title')
    Listado de libros
@endsection

@section('content')
<a href="/dashboard/create" class="btn btn-success">Agregar Libro</a>

<table class="table table-hover table-bordered my-3" aria-describedby="titulo">
    <thead class="table-dark">
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Precio</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($books as $book)
        <tr>          
          <td>{{ $book->title }}</td>
          <td>{{ $book->price }}</td> 
          <td>
              <a href="dashboard/{{ $book->id }}/edit" class="btn btn-warning btn-sm me-1">Editar</a>
              <button type="button" class="btn btn-danger btn-sm mt-1" data-bs-toggle="modal"
                  data-bs-target="#eliminaModal" data-bs-id="1">Eliminar</button>
          </td>

            @endforeach
        </tr>

    </tbody>
</table>
@endsection





