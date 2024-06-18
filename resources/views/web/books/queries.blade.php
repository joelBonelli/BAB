<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria BAB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        main > .container {
            padding: 20px 30px 0;
        }
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1; /* Hace que el contenido principal ocupe el espacio disponible */
        }
        .container.form-inline {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 300px;
    }
    .form-control {
        flex: 1;
        margin: 0 5px;
    }
    .btn {
        margin: 0 5px;
    }
    
    </style>
</head>
<body>
    @include('partials/nav');
    <main class="flex-shrink-0">

        <div class="container">
            @foreach($genres as $genre)
            <h3 class="container my-3" id="titulo">Listado de Libros: Genero {{ $genre->value }}</h3>
            @endforeach
        
            {{-- <form class="container form-inline" style="max-width: 400px;" action="{{route('web.books.queries')}}" method="GET">
                <select class="form-control mr-sm-2" name='filter'>
                    <option value="">Categorias</option>
                    @foreach($genres as $genre)
                    <option value="{{ $genre->id}}">{{ $genre->value }}</option>
                    @endforeach
                    {{-- <option value="opcion2">Año</option>
                    <option value="opcion3">Autor</option>
                    <option value="opcion3">Genero</option> --}}
                {{-- </select> --}}
                {{-- <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search" name='search'> --}}
                {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button> --}}
            {{-- </form> --}} 
            
            
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
                   {{-- @if ($noResult)
                       <tr>
                            <td colspan="7">No hay resultados</td>
                        </tr>    
                   
                   @else                         --}}
                    @foreach ($books as $book)
                    <tr>          
                        <td><a href=" /books/{{ $book->id }} "> {{ $book->title }}</a></td>
                        <td> {{ $book->autor }}</td>
                        <td> {{ $book->description }}</td>
                        <td>{{ $book->price }}</td> 
                        <td>{{ $book->released_date }}</td> 
                        <td>{{ $book->genre_id }}</td>
                        <td><img src="{{ $book->image }}" alt="Portada del libro" class="img-thumbnail" style="max-width: 80px;"></td>


                    </tr>
                        @endforeach
                    {{-- @endif --}}
  
                </tbody>
            </table>
        </div>
        <div class=" text-center mt-4">
            <a href="{{ route('web.books.index') }}" class="btn btn-primary">Volver al listado</a>
        </div>
    </main>

    @include('partials/footer');   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>