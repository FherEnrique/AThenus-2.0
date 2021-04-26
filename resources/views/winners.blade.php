@extends('layout')
    @section('content')
        <div style="font-size: 0px;">
            {{ $string = session('listaVivo') }}
            <?php 
                $array = json_decode($string);
            ?>
        </div>
        @if (count($array) == 0)
            <h1>TODOS han muerto <br>
            press F to pay respect
            </h1>
        @else
            <h1>EL GANADOR ES: {{ $array[0]->nombre }}</h1>
        @endif
    @endsection