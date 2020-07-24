@extends ('plantilla')

@if ( session('mensaje') )
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

@section ('seccion')
<h1>Agregar Nueva Playlist</h1>
<form action="{{route('playlist.crear')}}" method="POST">
    @csrf
    <input type="text" name="nombre" placeHolder="Nombre" class="form-control mb-2">
    <input type="number" name="usuario" placeHolder="Usuario" class="form-control mb-2">
    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection