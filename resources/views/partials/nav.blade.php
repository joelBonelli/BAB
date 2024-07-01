<nav class="navbar navbar-light bg-light" id="nav-color">
    <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand mx-auto" href="#">LIBRERIAS BAB</a>
        <div class="ml-auto">
            @auth
                <a href="/home" class="ml-auto">Cerrar sesión</a>
            @else
                <a href="/home" class="ml-auto">Iniciar sesión</a>
            @endauth
        </div>
    </div>
</nav>




