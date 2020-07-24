@extends ('plantilla')

@if ( session('mensaje') )
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

@section ('seccion')
<h1>Agregar Nueva Canción</h1>
<form action="{{route('cancion.crear')}}" method="POST">
    @csrf
    <input type="text" name="nombre" placeHolder="Nombre" class="form-control mb-2">
    <input type="number" name="artista_id" placeHolder="Artista_id" class="form-control mb-2">
    <input type="date" name="fecha_de_lanzamiento" placeHolder="Fecha_de_lanzamiento" class="form-control mb-2">
    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection