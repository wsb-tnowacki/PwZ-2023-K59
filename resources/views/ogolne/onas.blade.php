@extends('layout')

@section('podtytul')
    Strona O nas
@endsection
@section('tresc')
    <p>
        Treść strony o nas.
        @isset($zadania)
          <ol>
            @foreach ($zadania as $zadanie)
                <li>{{  $zadanie }}</li>
            @endforeach
        </ol>  
        @endisset
        
    </p>
@endsection