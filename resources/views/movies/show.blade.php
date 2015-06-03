@extends('layout')
@section('content')
	<h2>{{$movie->name}}</h2>
	<p>{{$movie->description}}</p>
	Category:
		{{$movie->category}}
		<br>


	<h3>Review of the current movie</h3>
		@foreach ($movie->reviews as $review)
			{{$review->content}}
			<br>
			Review created by:
			{{$review->user->name}}
			<br>

		@endforeach
		{!! Form::open(['url'=>'reviews']) !!}
		{!! Form::label('name','Review:') !!}
		{!! Form::text('content') !!}
		{!! Form::hidden('movie_id', $movie->id) !!}
		<br><br>
		{!! Form::submit('Guardar') !!}
		{!! Form::close() !!}
@stop