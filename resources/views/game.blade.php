@extends('layout')
    @if (empty(session('listaVivo')))
        {{ redirect()->to('')->send() }}
    @endif
    
    @section('content')
        <div style="font-size: 0px"><!-- SISTEMA DE MUERTES y de dias sup -->
            {{  $a = session('diaActual') }}
            {{ $string = session('listaVivo')}}
            {{ $sting2 = session('listaMuerto')}}
            <?php
                $array = json_decode($string); $array2 = json_decode($sting2);
                $aux = array(); $ahora = array();
                foreach ($array as $key) {
                    $key->dias = $a;
                    if ($key->salud < rand(1,100)) { //Abandonad cualquier esperanza
                        array_push($ahora, $key);?>
                        {{ $pp = 5}}
                    <?php
                        $pp++;
                    }else{
                        array_push($aux, $key);
                    }
                }
                array_push($array2, $ahora);
                $sesion[0] = json_encode($aux); $sesion[1]=json_encode($array2);
            ?>
        </div><!--FIN SISTEMA DE MUERTES y de dias sup -->
        
        
        <h1>Dia {{ session('diaActual') }}</h1>
        <h1>Muertos ahora</h1>
        <ul>
            @forelse ($ahora as $item)
                <li>{{ $item->nombre }} ha muerto</li>
            @empty
                <li>Un dia sin muertos</li>
            @endforelse
        </ul>
        <form action="{{ route('game') }}" method="GET">
            <input type="submit" value="siguiente dia ->" class="btn btn-light">
        </form>
        
        
        <div style="font-size: 0px"><!-- Actualizar DIA -->
            <?php
                $a++;
            ?>
            {{ session(['diaActual' => $a, ]) }}
        </div><!--FIN Actualizar DIA -->
    @endsection
    
    
    
    