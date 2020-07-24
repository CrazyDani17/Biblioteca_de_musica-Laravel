@extends('plantilla')

@section('seccion')
<h1 class="display-4">Playlists</h1>
<a href="{{ route('agregar_playlist') }}" class="btn btn-primary">Agregar una nueva playlist</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($playlists as $playlist)
    <tr>
      <th scope="row">{{$playlist->id}}</th>
      <td>
        <a href="{{route('playlist',$playlist)}}">
            {{$playlist->nombre}}
        </a>
      </td>
      <td>
        <a href="{{route('usuario',$playlist->usuario)}}">
            {{$playlist->usuario->nombre}}
        </a>
      </td>
      <td>
        <a href="{{route('playlist.editar',$playlist)}}" class="btn btn-warning btn-sm">Editar</a>
        <form action="{{ route('playlist.eliminar', $playlist) }}" class="d-inline" method="POST">
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