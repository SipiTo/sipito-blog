@extends('layout')

@section('content')
	<p>
		<h4>{{ $post->long }}</h4>
		{{ $post->long }}
	</p>
	<p>
		<img src="../img/{{ $post->img }}.jpg">
	</p>
@endsection