@extends('layouts.main')

@section('main-content')
    <ul>
        @foreach ($trains as $item)
            <li>
                <h1>
                    Nome azienda: {{ $item['azienda'] }}
                </h1>
            </li>
            <li>
                Stazione di partenza: {{ $item['stazione_di_partenza'] }}
            </li>
            <li>
                Stazione di arrivo: {{ $item['stazione_di_arrivo'] }}
            </li>
            <li>
                Orario di partenza: {{ $item['orario_di_partenza'] }}
            </li>
            <li>
                Orario di partenza: {{ $item['orario_di_partenza'] }}
            </li>
            <li>
                Codice treno: {{ $item['codice_treno'] }}
            </li>
            <li>
                Numero carrozze: {{ $item['numero_carrozze'] }}
            </li>
            <li>
                In orario: {{ $item['in_orario'] }} //
                legenda: 1 = in orario, 0 = non in orario
            </li>
            @endforeach
    </ul>
@endsection
