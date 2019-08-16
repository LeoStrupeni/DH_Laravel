<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Titulo')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-success w-100">
            <a class="navbar-brand">Practica Laravel</a>
        </nav>
    </div>
    
    @yield('Contenido')

    <div class="row text-black footer-trademark justify-content-center bg-success">
        <small class="text-black mt-4">
            © 2019 - Realizado por Leonardo
        </small>
    </div>
</div>
    


</body>
</html>