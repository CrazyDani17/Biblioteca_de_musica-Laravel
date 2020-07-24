@extends ('plantilla')

@if ( session('mensaje') )
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

@section ('seccion')
<h1>Agregar una cancion a la Playlist:{{$playlist->nombre}}</h1>
@endsection