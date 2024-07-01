<!DOCTYPE html>
<html lang="es">
 @include('partials/head')

<body class="d-flex flex-column h-100">
  @include('partials/nav')
  
  <main class="flex-shrink-0">

    
        <nav class="container" aria-label="breadcrumb">
        <ol class="breadcrumb">
          @section('breadcrumb')
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          @show
      </ol>
    </nav>
  
    
      <div class="container">
          <h3 class="my-3" id="titulo">@yield('title')</h3>
      </div>

      <div class="container">
        @yield('content')
    </div>



  </main>
  @include('partials/footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>