@extends('admin.template')

@section('title')
Eliminar Actividad
@endsection

@section('content')

<div class="page-header">
	<h2>Eliminar Actividad</h2>
</div>


<div class="form-group">
	¿Deseas eliminar el contenido <i>"{{ $data }}"</i>?
</div>
<div class="form-group">
{!! Form::open() !!}
	<input type="submit" value="Eliminar"  class="btn btn-danger" />
	<a href="{{ URL::to("admin/activities") }}" class="btn btn-default">Cancelar</a>
{!! Form::close() !!}
</div>
@endsection

