@extends('layout')

@section('podtytul')
    Strona O nas
@endsection
@section('tresc')
    <p>
        Treść strony o nas.
        <ol>
            @foreach ($zadania as $zadanie)
                <li>{{  $zadanie }}</li>
            @endforeach
        </ol>
    </p>
@endsection