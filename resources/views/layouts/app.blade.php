<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <title>laravel-comics</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-dark">

        {{-- header --}}
        @include('partials.header')

        {{-- placeorder main --}}
        @yield('content')
        @yield('news')

        {{-- footer --}}
        @include('partials.footer')

</body>
</html>
