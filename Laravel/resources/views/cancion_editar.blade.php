@extends ('plantilla')

@if ( session('mensaje') )
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

@section ('seccion')
<h1>Actualizar Informacion de la cancion: {{$cancion->nombre}}</h1>
<form action="{{route('cancion.update', $cancion->id)}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="nombre" placeHolder="Nombre" class="form-control mb-2" value="{{$cancion->nombre}}" >
    <input type="number" name="artista_id" placeHolder="Artista_id" class="form-control mb-2" value="{{$cancion->artista_id}}" >
    <input type="date" name="fecha_de_lanzamiento" placeHolder="Fecha_de_lanzamiento" class="form-control mb-2" value="{{$cancion->fecha_de_lanzamiento}}" >
    <button class="btn btn-primary btn-block" type="submit">Editar</button>
</form>
@endsection