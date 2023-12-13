@extends('layout')
@section('tytul')
    Edycja posta
@endsection
@section('podtytul')
    Zmiana posta
@endsection
@section('tresc')
    <form action="{{ route('posty.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
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
            <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł posta" value="@if(old('tytul') !== null){{old('tytul')}}@else{{$post->tytul}}@endif">
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
            <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autor posta" value="@if(old('autor') !== null){{old('autor')}}@else {{$post->autor}}@endif">
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
            <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email" value="@if(old('email') !== null){{old('email')}} @else{{$post->email}}@endif">
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
            <textarea class="form-control" name="tresc" id="tresc" rows="4">@if(old('tresc') !== null){{old('tresc')}}@else{{$post->tresc}}@endif</textarea>
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
        <button type="submit" class="btn btn-success m-1">Zmień posta</button>
    </form>
@endsection