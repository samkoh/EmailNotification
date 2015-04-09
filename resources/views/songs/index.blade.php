@extends('master')

@section('content')

    <section class="header">
        <div class="background">&nbsp; </div>
    </section>


	@foreach ($songs as $song)
		<li>
			<a href="/songs/{{ $song->slug }}">
				{{ $song->title }}
			</a>
		</li>
	@endforeach
@stop