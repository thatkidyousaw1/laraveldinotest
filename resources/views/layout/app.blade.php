<!doctype html>
<script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>DINO</title>
    </head>

    <body>
        @include('nav.navbar')
        <div class="container">
            @include('nav.alerts')
            @yield('content')
        </div>
    </body>
</html>
 