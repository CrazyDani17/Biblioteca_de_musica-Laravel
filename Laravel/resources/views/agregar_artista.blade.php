@extends ('plantilla')

@if ( session('mensaje') )
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

@section ('seccion')
<h1>Agregar Nuevo Artista</h1>
<form action="{{route('artista.crear')}}" method="POST">
    @csrf
    <input type="text" name="nombre" placeHolder="Nombre" class="form-control mb-2">
    <input type="text" name="descripcion" placeHolder="Descripción" class="form-control mb-2">
    <input type="text" name="nacionalidad" placeHolder="Nacionalidad" class="form-control mb-2">
    <input type="date" name="fecha_de_nacimiento" placeHolder="Fecha_de_nacimiento" class="form-control mb-2">
    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection