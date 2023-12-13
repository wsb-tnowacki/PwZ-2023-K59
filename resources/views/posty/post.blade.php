@extends('layout')
@section('tytul')
    Szczegóły posta
@endsection
@section('podtytul')
    Szczegóły posta
@endsection
@section('tresc')
    <form action="{{ route('posty.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE') 
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
            <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł posta" value="{{ $post->tytul }}" disabled="disabled">
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
            <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autor posta" value="{{ $post->user->name }}" disabled="disabled">
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
            <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email" value="{{ $post->email }}" disabled="disabled">
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
            <textarea class="form-control" name="tresc" id="tresc" rows="4" disabled="disabled">{{ $post->tresc }}</textarea>
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
        <a href="{{route('posty.index')}}"><button type="button" class="btn btn-primary m-1">Powrót do listy postów</button></a>
        <a href="{{route('posty.edit', $post->id)}}"><button type="button" class="btn btn-success m-1">Zmień posta</button></a>
        <button type="submit" class="btn btn-danger m-1">Usuń posta</button>
    </form>
@endsection