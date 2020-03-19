@extends('layout')
    @section('content')
        <form action="{{ route('personas') }}" method="POST">
            @for ($i = 0; $i < 10; $i++)
                <input type="text" name="chico[]" id="chico{{ $i }}" class="form-control" required>  <br>
                <input type="text" name="chica[]" id="chica{{ $i }}" class="form-control" required> <br><br> 
            @endfor
            <input type="submit" value="JUGAR" class="btn btn-success" style="width:40%;">
        </form><br><br>   
        <form action="{{ route('random') }}" method="POST">
            <input type="submit" value="Nombres al azar" class="btn btn-info" style="width:40%;">
        </form>  
    @endsection