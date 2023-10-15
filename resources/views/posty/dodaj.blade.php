@extends('layout')
@section('tytul')
    Dodawanie posta
@endsection
@section('podtytul')
    Dodawanie posta
@endsection
@section('tresc')
    <form action="{{ route('posty.store') }}" method="post">
        @csrf
        @if ($errors->any())
        {{-- dump($errors) --}}
        <div class="alert alert-danger">
            Uzupełnij właściwe pola
            @foreach ($errors->all() as $error)
                    <p>
                       {{ $error }} 
                    </p>
                @endforeach
        </div>
        @endif
        <div class="form-group">
            <label for="tytul">Tytuł</label>
            <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł posta" value="{{ old('tytul') }}">
            @if ($errors->get('tytul'))
            <div class="alert alert-danger">
                @foreach ($errors->get('tytul') as $error)
                    <p>
                       {{ $error }} 
                    </p>
                @endforeach
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autor posta" value="{{ old('autor') }}">
            @if ($errors->get('autor'))
            <div class="alert alert-danger">
                @foreach ($errors->get('autor') as $error)
                    <p>
                       {{ $error }} 
                    </p>
                @endforeach
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email" value="{{ old('email') }}">
            @if ($errors->get('email'))
            <div class="alert alert-danger">
                @foreach ($errors->get('email') as $error)
                    <p>
                       {{ $error }} 
                    </p>
                @endforeach
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="tresc">Treść</label>
            <textarea class="form-control" name="tresc" id="tresc" rows="4">{{ old('tresc') }}</textarea>
            @if ($errors->get('tresc'))
            <div class="alert alert-danger">
                @foreach ($errors->get('tresc') as $error)
                    <p>
                       {{ $error }} 
                    </p>
                @endforeach
            </div>
            @endif
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Dodaj posta</button>
    </form>
@endsection