@extends('..layouts.homeLayout')
    @section('container')
        <h1>Dia {{ $day - 1 }}</h1>
        <h1>Muertos ahora</h1>
        <ul>
            @forelse ($deathNow as $item)
                <li>{{ $item }}</li>
            @empty
                <li>Un dia sin muertos</li>
            @endforelse
        </ul>

        <hr class="new5">
        @foreach ($actionNow as $item)
            {{ $item }}
            <br><br>
        @endforeach
        <hr class="new5">

        <form action="/history/" method="GET">
            @if (count($final) <= 1)
                <input type="submit" value="Finalizar los juegos del hambre" class="btn btn-dark">
            @else
                <input type="submit" value="siguiente dia ->" class="btn btn-light">
            @endif
        </form>
    @endsection



