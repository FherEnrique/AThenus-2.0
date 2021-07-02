@extends('..layouts.homeLayout')
    @section('container')
            <div class="p-7 w-full bg-gray-600 shadow-2xl bg-opacity-20 mb-8 text-white border border-white border-2 border-b-4 border-opacity-50 rounded-3xl">
                @if (count($winner) == 1)
                    <p class="text-center text-6xl mx-auto p-14">EL GANADOR ES </p>
                    <p class="text-center text-7xl mx-auto mt-8">{{ $winner[0]->name }}</p>
                @else
                    <script src="{{ asset('js/win.js') }}"></script>
                    <p class="text-center text-6xl mx-auto p-14">Todos han muerto...</p>
                    <img src="/img/F.png" alt="F keycap" class="img-f mx-auto" width="100" height="100">
                    <p class="text-center text-6xl mx-auto p-14">Press <span class="text-yellow-400">F</span> to pay respect</p>
                @endif
                <div class="flex-center flex mt-8 mb-8">
                    <div>
                        <a href="/destroyTheGame/">
                            <button class="bg-transparent hover:bg-green-800 text-blue-dark p-2 font-semibold hover:text-white px-4 border border-blue hover:border-transparent rounded-3xl text-2xl">
                                <i class="fas fa-redo-alt mr-4 text-center"></i>  JUGAR DE NUEVO
                            </button>
                        </a>
                    </div>
                </div>
            </div>
    @endsection
