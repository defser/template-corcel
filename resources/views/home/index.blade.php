@extends('layout')

@section('content')
    <div class="home">

        @foreach($distribuidores as $key => $distribuidor)
            <p>This is post {{ $distribuidor->Title }}</p>
        @endforeach

    </div>
@stop

