<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATheneus</title>
    <script src="https://kit.fontawesome.com/2944ad1077.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="./css/favicon.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
</head>
    <body>
        <main srole="main">
            @yield('content')
        </main>
        <div class="hidden">
            <audio controls autoplay loop>
                <source src="{{asset('audio/sky.mp3')}}" type="audio/mp3">
            </audio>
        </div>
    </body>
</html>