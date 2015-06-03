@extends('layout')
@section('content')
{!! Form::model($movie, ['method'=>'PATCH', 'action' => ['MoviesController@update', $movie->id]]) !!}
{!! Form::label('name','Title:') !!}
{!! Form::text('name') !!}
<br>
{!! Form::label('name','Description:') !!}
{!! Form::text('description') !!}
{!! Form::select('category',array('Drama'=>'Drama','Terror'=>'Terror','Comedia'=>'Comedia'))!!}

<br><br>
{!! Form::submit('Guardar') !!}
{!! Form::close() !!}
@stop