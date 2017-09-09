@extends('layout')

@section('content')
	<p>
		<h4>{{ $post->short }}</h4>
		{{ $post->long }}
	</p>
	<p>
		<img src="../img/{{ $post->img }}.jpg" alt="{{ $post->short }}">
	</p>
@endsection