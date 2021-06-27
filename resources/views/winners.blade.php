@extends('..layouts.homeLayout')
    @section('content')
        <div class="container w-4/5 mx-auto md:w-1/2">
            <div class="p-7 bg-gray-600 shadow-2xl bg-opacity-20 text-white border border-white border-2 border-b-4 border-opacity-50 rounded-3xl">
                @if (false)
                    <p class="text-center text-8xl mx-auto p-20">EL GANADOR ES </p>
                    <p class="text-center text-9xl mx-auto mt-8">{{ $winner[0]->name }}</p>
                @else
                    <p class="text-center text-8xl mx-auto px-20 py-10">TODOS han muerto</p>
                    <img src="/img/F.png" alt="F keycap" class="img-f mx-auto">
                    <p class="text-center text-7xl mx-auto px-20 py-10">Press <span class="text-yellow-400">F</span> to pay respect</p>
                @endif
                <div class="flex-center flex">
                    <div>
                        <a href="/destroyTheGame/">
                            <button class="btn btn-dark uppercase text-center border-2 border-white rounded-3xl text-2xl mt-36 p-4">Jugar de nuevo</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection