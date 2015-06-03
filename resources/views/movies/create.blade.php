@extends('layout')
@section('content')
{!! Form::open(['url'=>'movies']) !!}
{!! Form::label('name','Name:') !!}
{!! Form::text('name') !!}
<br>
{!! Form::label('name','Description:') !!}
{!! Form::text('description') !!}
{!! Form::select('category',array('Drama'=>'Drama','Terror'=>'Terror','Comedia'=>'Comedia'))!!}


<br><br>
{!! Form::submit('Guardar') !!}
{!! Form::close() !!}
@if ($errors->any())
	@foreach($errors -> all() as $error)
		{{$error}}
	@endforeach
@endif
@stop