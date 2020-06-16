<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Stylesheets/scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
    <header>
        <!-- Top menu -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="/"><img class="" src="{{ asset('images/Logo-Imkers-Leiden.png') }}" alt="Logo"></a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="nav-link scroll-link" href="about">About</a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="nav-link scroll-link" href="cursus">Cursussen</a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="nav-link scroll-link" href="contact">Contact</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(!Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="login">{{ __('Login') }}</a>
                            </li>
                        @else
                            @if(Auth::user()->userrank)
                                <li class="nav-item">
                                    <a class="nav-link" href="register">{{ __('Create User') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="users">{{ __('Users') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="adminpanel">{{ __('Admin Panel') }}</a>
                            </li>
                            <li class="nav-item my-auto">
                                <a class="nav-item btn btn-danger" href="logout">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <h1 class="text-center my-auto ml-2 text-white">{{ Auth::user()->username }}</h1>
                        @endif
                    </ul>
                </div>
        </nav>
    </header>
    <div id="app">
        <navigation-component :user="{{ Auth::check() ? Auth::user() : "{}" }}"></navigation-component>
        @yield('content')
    </div>

    <footer>
        <script src="/js/app.js"> </script>
    </footer>
    </body>
</html>
