@extends('layout')
    @section('content')
        @if (!empty($aprueba))
        <ul style="list-style: disc; text-align: left !important;">
            @foreach ($aprueba as $i)
                <li>{{ $i }}</li>
            @endforeach
        </ul>
        @else
            <h1>La lista esta vacia</h1>
        @endif
        <br><br> <hr> <br><br> 
        <ul>
        @forelse ($aprueba as $i)
            <li>{{ $i }}</li>
        @empty
            <h1>LA LISTA TA VACIA</h1>
        @endforelse
        </ul>
    @endsection
