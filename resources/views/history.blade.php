@extends('..layouts.homeLayout')
    @section('container')
        <div class="p-7 bg-gray-600 shadow-2xl bg-opacity-20 text-white border border-white border-2 border-b-4 border-opacity-50 rounded-3xl">
            <p class="text-3xl text-center p-4">Día {{ $day - 1 }}</p>
            <p class="text-3xl text-right">Muertes: </p>
            <p class="text-2xl text-center p-4">Muertos ahora</p>
            <ul class="mb-5">
                @forelse ($deathNow as $item)
                    <li class="text-justify text-xl">{{ $item }}</li>
                @empty
                    <li class="text-justify text-xl">Un dia sin muertos</li>
                @endforelse
            </ul>

            <hr class="new5 p-4">
            <p class="text-3xl text-left mb-4">Eventos del día</p>
            @foreach ($actionNow as $item)
                <div class="text-justify text-xl">
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
        </div>
    @endsection



