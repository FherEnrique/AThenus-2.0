@extends('..layouts.layout')
@section('content')
        <div id="particles-js"  class="h-screen relative bodyimage">
            <div class="absolute block flex items-center justify-center w-full h-full z-50">
                <div class="title text-center m-b-md">
                    <span>ATheneus</span> <br><br>
                    <a href="/play/" class="py-3 px-14 rounded-full transition duration-500 ease-in-out bg-gradient-to-r from-red-400 to-yellow-500 hover:text-white hover:from-yellow-500 hover:to-red-500 hover:no-underline">Jugar</a>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
@endsection
