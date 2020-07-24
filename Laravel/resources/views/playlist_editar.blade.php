@extends ('plantilla')

@if ( session('mensaje') )
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

@section ('seccion')
<h1>Actualizar Informacion de la playlist: {{$playlist->nombre}}</h1>
<form action="{{route('playlist.update',$playlist->id)}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="nombre" placeHolder="Nombre" class="form-control mb-2" value="{{$playlist->nombre}}" >
    <input type="number" name="usuario_id" placeHolder="Usuario" class="form-control mb-2" value="{{$playlist->usuario_id}}" >
    <button class="btn btn-primary btn-block" type="submit">Editar</button>
</form>
@endsection