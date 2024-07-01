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
<p style="text-align: center">Compra realizada con éxito</p>
<p style="text-align: center">Gracias por su compra</p>
@endsection

@section('content')
<div class="container text-center mt-4 mb-4">
    <a href="{{ route('web.books.index') }}" class="btn btn-primary">Volver al listado</a>
</div>
@endsection