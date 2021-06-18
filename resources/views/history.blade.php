@extends('layout')
        </div><!--FIN SISTEMA DE MUERTES y de dias sup -->


        <h1>Dia {{ session('diaActual') }}</h1>
        <h1>Muertos ahora</h1>
        <ul><!-- Vista de las muertes -->
            @forelse ($anuncio as $item)
                <li>{{ $item }}</li>
            @empty
                <li>Un dia sin muertos</li>
            @endforelse
        </ul>

        <hr class="new5">
        @foreach ($accion as $item)
            {{ $item }}
            <br><br>
        @endforeach
        <hr class="new5">

        <form action="{{ route('game') }}" method="GET">
            @if (count($final) <= 1)
                <input type="submit" value="Finalizar los juegos del hambre" class="btn btn-dark">
            @else
                <input type="submit" value="siguiente dia ->" class="btn btn-light">
            @endif
        </form>


        <div style="font-size: 0px"><!-- Actualizar DIA -->
            <?php
                $a++;
            ?>
            {{ session(['diaActual' => $a, 'listaMuerto' => json_encode($array2), 'listaVivo' => json_encode($final)]) }}
        </div><!--FIN Actualizar DIA -->
    @endsection



