@extends('..layouts.homeLayout')
    @section('container')
        <div class="p-7 bg-gray-600 shadow-2xl bg-opacity-20 text-white border border-white border-2 border-b-4 border-opacity-50 rounded-3xl">
            <p class="text-3xl text-center p-4">Día {{ $day - 1 }}</p>
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
                    <button type="submit" class="bg-transparent hover:bg-red-800 text-blue-dark p-2 font-semibold hover:text-white px-4 border border-blue hover:border-transparent rounded">
                        <i class="fas fa-chess-rook mr-4 text-center"></i> FINALIZAR LOS JUEGOS DEL HAMBRE
                    </button>
                @else
                    <button type="submit" class="bg-transparent hover:bg-blue-800 text-blue-dark p-2 font-semibold hover:text-white px-4 border border-blue hover:border-transparent rounded">
                        <i class="fas fa-angle-double-right mr-4 text-center"></i> SIGUIENTE DIA
                    </button>
                @endif
            </form>
        </div>
    @endsection



