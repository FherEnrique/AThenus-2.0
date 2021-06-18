@extends('layout')
    @section('content')
        @if (count($winner) == 1)
            <h1>EL GANADOR ES: {{ $winner[0]->name }}</h1>
        @else
            <h1>TODOS han muerto <br>
                press F to pay respect
            </h1>
        @endif
        <a href="/destroyTheGame/">
            <button>Jugar de nuevo</button>
        </a>
    @endsection