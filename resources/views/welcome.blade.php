@extends('layouts.app')

<section>

<div class="container">
	@foreach($posts as $post)
		@if($post->categoria == 1)
			<div class="item">
				<div class="imagen">
					<a href="{{ route('posts.show', $post->id) }}">
					<img src="img/{{ $post->img }}.jpg">
					</a>
				</div>
				<div class="content">
					<div>
						<p>{{ $post->id }} {{ $post->short }}</p>
					</div>
					<div>
						<p><h4>{{ $post->long }}</h4></p>
					</div>
						<div>
						<p>{{ $post->categoria }}</p>
					</div>
				</div>				
			</div>
		@endif
	@endforeach
</div>


<div class="container">
	@foreach($posted as $post)
		@if($post->categoria == 2)
		<div class="item">
			<div class="imagen">
				<a href="{{ route('posts.show', $post->id) }}">
				<img src="img/{{ $post->img }}.jpg">
				</a>
			</div>
			<div class="content">
				<div>
					<p>{{ $post->id }} {{ $post->short }}</p>
				</div>
				<div>
					<p>
						<h4>{{ $post->long }}</h4>
					</p>
				</div>
				<div>
					<p>{{ $post->categoria }}</p>
				</div>
			</div>				
		</div>
		@endif
	@endforeach
</div>

</section>