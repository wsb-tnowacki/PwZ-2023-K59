@extends('layout')
@section('tytul')
    Lista postów
@endsection
@section('podtytul')
Lista postów
@endsection
@section('tresc')
<table class="table table-dark table-striped">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
      </tbody>
  </table>
@endsection