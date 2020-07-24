@extends ('plantilla')

@if ( session('mensaje') )
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

@section ('seccion')
<h1>Actualizar Informacion del Artista: {{$artista->nombre}}</h1>
<form action="{{route('artista.update',$artista->id)}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="nombre" placeHolder="Nombre" class="form-control mb-2" value="{{$artista->nombre}}">
    <input type="text" name="descripcion" placeHolder="Descripción" class="form-control mb-2" value="{{$artista->descripcion}}">
    <input type="text" name="nacionalidad" placeHolder="Nacionalidad" class="form-control mb-2" value="{{$artista->nacionalidad}}">
    <input type="date" name="fecha_de_nacimiento" placeHolder="Fecha_de_nacimiento" class="form-control mb-2" value="{{$artista->fecha_de_nacimiento}}">
    <button class="btn btn-primary btn-block" type="submit">Editar</button>
</form>
@endsection