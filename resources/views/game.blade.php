@extends('layout')
    @if (empty(session('listaVivo')))
        {{ redirect()->to('')->send() }}
    @endif
    @section('content')
        <div style="font-size: 0px"><!-- SISTEMA DE MUERTES y de dias sup -->

            {{ $a = session('diaActual') }}
            {{ $string = session('listaVivo') }}
            {{ $sting2 = session('listaMuerto') }}
            <?php
                $array = json_decode($string);
                $array2 = json_decode($sting2);
                if (count($array) <= 1) {?>
                {{  redirect()->to('ganador/')->send() }}
                <?php }
                use Illuminate\Support\Facades\DB;
                $aux = array(); //Ver quienes siguen vivos
                $ahora = array(); // PARA actualizar listaMuerto
                $anuncio = array(); //PARA lista de muertos
                $odio = DB::select("SELECT descripcion FROM muertes");

                foreach ($array as $key) {
                    $key->dias = $a;
                    if ($key->salud < rand(1,100)) { //Abandonad cualquier esperanza
                        array_push($anuncio, "Suena un cañon a lo lejos ".$key->nombre." tuvo una ".$odio[rand(0, count($odio)-1)]->descripcion);
                        array_push($ahora, $key);
                    }else{
                        array_push($aux, $key);
                    }
                }
                array_push($array2, $ahora); //UNIR los muertos de antes con los de ahora
            ?>

            <?php
            $accion = array(); //Ver las aciones de ahora
            $final = array(); //Para enviar a la sesion con los datos de salud actualizados
            foreach ($aux as $key) {
                if ($key->arbol != 0) {
                    $amor = DB::select("SELECT a.id, a.cant_personajes, a.salud, a.descripcion FROM auxiliares x INNER JOIN acciones a ON x.id_hijo = a.id WHERE x.id_padre = ".$key->arbol);
                }else{
                    $amor = DB::select("SELECT a.id, cant_personajes,salud,descripcion FROM acciones a LEFT JOIN auxiliares x ON a.id = x.id_hijo WHERE x.id_hijo IS NULL");
                }
                $indice = rand(0, count($amor)-1);
                array_push($accion, $key->nombre." realiza la ".$amor[$indice]->descripcion);
                $key->salud = $key->salud + $amor[$indice]->salud;

                $key->salud = ($key->salud < 0) ? 0 : $key->salud;
                $key->salud = ($key->salud > 100) ? 100 : $key->salud;

                /*
                $super = DB::select("SELECT id FROM auxiliares WHERE id_padre = ".$amor[$indice]->id);
                if (count($super) != 0) {
                    $key->arbol = $amor[$indice]->id;
                }
                */
                array_push($final, $key);
            }
            ?>
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
        @php
            $i =1;
        @endphp
        @foreach ($accion as $item)
            {{ $item }}
            <br><br>
            <h1>{{ $i }}</h1>
            @php
                $i++;
            @endphp
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



