@extends('master')

@section('content')
	
		<h2>Add a new Song</h2>

		<!--Can be refere at FormBuilder.php-->
		{!! Form::open(['route' => 'songs.store']) !!}

			@include('songs.form');

		{!! Form::close() !!}

@stop