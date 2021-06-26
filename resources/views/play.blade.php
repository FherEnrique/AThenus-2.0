@extends('..layouts.homeLayout')
    @section('container')
        <div class="p-7 mt-8 mb-8 border-2 bg-gray-600 shadow-2xl bg-opacity-20 text-white border border-white border-b-4 border-r-4 border-opacity-50 rounded-3xl">
            <div class="flex flex-row-reverse mt-8 mb-8">
                <div>
                    <button class="bg-transparent hover:bg-blue-800 text-blue-dark p-2 font-semibold hover:text-white px-4 border border-blue hover:border-transparent rounded">
                        <i class="fas fa-plus text-center"></i>
                    </button>
                </div>
                <div>
                    <h1 class="py-2 px-4 text-center text-3xl">{{$i = 1}}</h1>
                </div>
                <div>
                    <button class="bg-transparent hover:bg-blue-800 text-blue-dark p-2 font-semibold hover:text-white px-4 border border-blue hover:border-transparent rounded">
                        <i class="fas fa-minus text-center"></i>
                    </button>
                </div>
                <div>
                    <h1 class="py-2 px-4 text-center 2xl:mr-80 xl:mr-80 lg:mr-80 md:mr-16 text-3xl">
                        Distritos:
                    </h1>
                </div>
            </div>
            <form action="/takeNames/" method="POST">
                @csrf
                @for ($i = 0; $i < 1; $i++)
                    <label class="text-2xl text-center"> <i class="fas fa-city mr-4"></i> Distrito {{ $i+1 }}</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-male fa-lg text-gray-900"></i>
                        </div>
                        <input type="text"
                               name="boy[]"
                               class="block pr-10 text-xl shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-yellow-500 transition duration-500 ease-in-out"
                               placeholder="Escriba el nombre del personaje masculino"
                               required autocomplete="on" />
                    </div>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-female fa-lg text-gray-900"></i>
                        </div>
                        <input type="text"
                               name="girl[]"
                               class="block pr-10 text-xl shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-yellow-500 transition duration-500 ease-in-out"
                               placeholder="Escriba el nombre del personaje femenino"
                               required autocomplete="on" />
                    </div>
                    <br><br>
                @endfor
                <button type="submit" class="bg-transparent hover:bg-green-800 text-blue-dark p-2 font-semibold hover:text-white px-4 border border-blue hover:border-transparent rounded">
                    <i class="fas fa-play mr-4 text-center"></i> EMPEZAR
                </button>
            </form><br><br>
            <form action="/generateNames/" method="POST" class="mb-4">
                @csrf
                <button type="submit" class="bg-transparent hover:bg-yellow-800 text-blue-dark p-2 font-semibold hover:text-white px-4 border border-blue hover:border-transparent rounded-3xl">
                    <i class="fas fa-dice mr-4 text-center"></i> EMPEZAR CON NOMBRES ALEATORIOS
                </button>
            </form>
        </div>

    @endsection
