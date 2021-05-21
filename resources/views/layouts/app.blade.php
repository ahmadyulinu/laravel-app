<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .identifer .nav-item a:hover {
        border: none !important;
        text-decoration: none;
    }
    </style>





</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <h5 class="navbar-brand" style="margin-left: 2%; margin-top: -0.5%">
                TechHub
            </h5>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @guest


                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-2">
                        <a>
                            <button class="btn btn-outline-secondary" onclick="light()">
                                Toggle Light
                            </button>
                        </a>
                    </li>
                    <li class="nav-item mr-2">
                        <a href="/login"><button class="btn btn-outline-secondary">Login</button></a>
                    </li>

                </ul>



                @else
                <ul class="navbar-nav ml-auto identifier">
                    <li class="nav-item mr-2">
                        <a>
                            <button class="btn btn-outline-secondary" onclick="light()">
                                Toggle Light
                            </button>
                        </a>
                    </li>

                    <!-- Authentication Links -->
                    <li class="nav-item mr-2">
                        <a href="/admin">
                            <button class="btn btn-outline-secondary">
                                Dashboard
                            </button></a>
                    </li>
                    <li class="nav-item mr-2">
                        <a href="{{ route('register') }}"><button class="btn btn-outline-secondary">Register
                                Account</button></a>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                            @csrf
                            <button class="btn btn-outline-secondary" type="submit">{{ __("Logout") }}</button>
                        </form>
                </ul>
                @endguest
            </div>
        </nav>

        <main class="container">
            @yield('content')
        </main>
    </div>


</body>
<script src="{{ asset('js/script.js') }}">

</script>

</html>