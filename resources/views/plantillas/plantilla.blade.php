<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e194f3e40d.js" crossorigin="anonymous"></script>
    <title>@yield('titulo')</title>
</head>
<body>
    <div class="container-fluid">
        <nav
    class="navbar navbar-expand-sm navbar-dark bg-primary"
>
    <a class="navbar-brand" href="#">Sistema - estudiantes</a>
    <button
        class="navbar-toggler d-lg-none"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId"
        aria-expanded="false"
        aria-label="Toggle navigation"
    ></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('estudiantes.inicio')}}" aria-current="page"
                    >Inicio</a
                >
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('estudiantes.crear')}}">Crear</a>
            </li>
        </ul>
    </div>
</nav>
    </div>


    
    @yield('contenido')
    
</body>
</html>