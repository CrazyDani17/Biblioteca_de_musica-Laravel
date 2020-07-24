@extends ('plantilla')

@section ('seccion')
<h1>{{$info->nombre}}</h1>
<p>{{$info->descripcion}}</p>
<p>Fecha de nacimiento: {{$info->fecha_de_nacimiento}}</p>
@endsection