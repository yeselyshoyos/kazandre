<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kazandré Boutique</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- CSS only -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="img/kazandre.svg">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">

</head>

<body>

    {{-- header sm --}}

    <div class="d-sm-none">
        @include('paginainicio.headersm')
    </div>

<div class="container-lg">

    {{-- header md - lg --}}
    <div id="barra" class="d-none d-sm-block">
        @include('paginainicio.header')
    </div>

    {{-- barra categorias --}}
    <div id="muestras" class="text-center shadow-sm p-3 mb-5 d-none d-sm-block">
        @include('paginainicio.categorias')
    </div>

    {{-- Contenido --}}
    <div id="productos" class="text-center">
        @include('paginainicio.contenido')
    </div>

</div>

    <footer>
        @include('paginainicio.footer')
    </footer>

</body>

</html>
