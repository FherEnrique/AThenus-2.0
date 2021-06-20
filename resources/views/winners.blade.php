@extends('layouts.homeLayout')
    @section('content')
        @if (count($winner) == 1)
            <h1 class="text-center text-8xl mx-auto p-20">EL GANADOR ES </h1>
            <h1 class="text-center text-9xl mx-auto mt-8">{{ $winner[0]->name }}</h1>
        @else
            <h1 class="text-center text-8xl mx-auto p-20">TODOS han muerto <br>
                press F to pay respect
            </h1>
        @endif
        <div class="flex-center flex">
            <div>
                <a href="/destroyTheGame/">
                    <button class="btn btn-dark uppercase text-center border-2 border-white rounded-3xl text-2xl mt-36 p-4">Jugar de nuevo</button>
                </a>
            </div>
        </div>
    @endsection