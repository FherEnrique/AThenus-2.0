@extends('layout')
    @section('content')
    @csrf
        <form action="{{ route('personas') }}" method="POST">
            @for ($i = 0; $i < 10; $i++)
            <label>Distrito {{ $i+1 }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-male fa-lg"></i></div>
                </div>
                <input type="text" name="chico[]"  class="form-control" required>
            </div> <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-female fa-lg"></i></div>
                </div>
                <input type="text" name="chica[]"  class="form-control" required>
            </div>
            <br><br>
            @endfor
            <input type="submit" value="JUGAR" class="btn btn-success" style="width:40%;">
        </form><br><br>
        <form action="{{ route('random') }}" method="POST">
            <input type="submit" value="Nombres al azar" class="btn btn-info" style="width:40%;">
        </form>
    @endsection
