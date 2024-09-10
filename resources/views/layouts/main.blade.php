<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ Vite::asset('resources/img/favicon.ico')}}" />
    <title>Dc Comics Laravel | @yield('titlePage')</title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.navbar')

    @yield('hero')

    @yield('content')

    <footer>
        @include('partials.firstFooter')
        @include('partials.secondFooter')
    </footer>

</body>
</html>
