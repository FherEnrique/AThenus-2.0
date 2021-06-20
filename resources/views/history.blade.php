@extends('..layouts.homeLayout')
    @section('container')
        <h1 class="text-3xl text-center p-4">Día {{ $day - 1 }}</h1>
        <h1 class="text-2xl text-center p-4">Muertos ahora</h1>
        <ul>
            @forelse ($deathNow as $item)
                <li class="text-center text-2xl p-4">{{ $item }}</li>
            @empty
                <li class="text-center text-2xl p-4">Un dia sin muertos</li>
            @endforelse
        </ul>

        <hr class="new5 p-4">
        @foreach ($actionNow as $item)
            <div class="text-center text-xl">
                {{ $item }}
            </div>
            <br><br>
        @endforeach
        <hr class="new5 p-4">

        <form action="/history/" method="GET">
            @if (count($final) <= 1)
                <input type="submit" value="Finalizar los juegos del hambre" class="btn btn-dark uppercase text-center text-2xl">
            @else
                <input type="submit" value="siguiente día" class="btn btn-light uppercase text-center text-2xl">
            @endif
        </form>
    @endsection



