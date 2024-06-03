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
    
    </style>
</head>
<body>
    @include('partials/nav');
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1 class="card-title">{{ $book->title }}</h1>
                    </div>
                    <div class="card-body">
                        <img src="{{ $book->image }}" class="card-img-top mx-auto d-block img-thumbnail" alt="Portada del libro" style="max-width: 200px;">

                        <h3 class="card-text">{{ $book->autor }}</h3>
                        <p class="card-text">{{ $book->description }}</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Precio:</strong> ${{ $book->price }}</li>
                            <li class="list-group-item"><strong>Año:</strong> {{ $book->released_date }}</li>
                            <li class="list-group-item"><strong>Género:</strong> {{ $book->genre_id }}</li>
                        </ul>
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" class="btn btn-primary">Agregar a tu compra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" text-center mt-4">
        <a href="{{ route('web.books.index') }}" class="btn btn-primary">Volver al listado</a>
    </div>
       
    @include('partials/footer');
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>