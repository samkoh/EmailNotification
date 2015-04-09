@extends('master')

@section('content')
	
		<h2>{{ $song->title }}</h2>

		<!--Can be refere at FormBuilder.php-->
		{!! Form::model($song, ['url' => 'songs/' . $song->slug, 'method' => 'PATCH']) !!}

			@include('songs.form');

		{!! Form::close() !!}

@stop