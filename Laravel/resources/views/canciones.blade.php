@extends('plantilla')

@section('seccion')
<h1 class="display-4">Canciones</h1>
<a href="{{ route('agregar_cancion') }}" class="btn btn-primary">Agregar una nueva cancion</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Artista</th>
      <th scope="col">Fecha de lanzamiento</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($songs as $song)
    <tr>
      <th scope="row">{{$song->id}}</th>
      <td>{{$song->nombre}}</td>
      <td>
        <a href="{{route('song.artista',$song->artista)}}">
            {{$song->artista->nombre}}
        </a>
      </td>
      <td>{{$song->fecha_de_lanzamiento}}</td>
      <td>
        <a href="{{route('cancion.editar',$song)}}" class="btn btn-warning btn-sm">Editar</a>
        <form action="{{ route('cancion.eliminar', $song) }}" class="d-inline" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection