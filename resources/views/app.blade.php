<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
    <header>
        <!-- Top menu -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="">
                <h1 class="text-center">{{ env('APP_NAME') }}</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="cursus">Cursussen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')

    </body>
</html>
