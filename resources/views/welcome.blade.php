<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="css/less/style.css">

<title>LESS</title>

</head>

<body>
	<section>
		<div class="container">

		@foreach($posted as $post)

			<div class="item">
				<div class="imagen">
					<img src="img/houstonhospitals-FA.jpg">
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
						<p>{{ $post->autor }}</p>
					</div>
				</div>				
			</div>
			@endforeach

		</div>

		<div class="container">

		@foreach($posted as $post)

			<div class="item">
				<div class="imagen">
					<img src="img/houstonhospitals-FA.jpg">
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
						<p>{{ $post->autor }}</p>
					</div>
				</div>				
			</div>
			@endforeach
		</div>
		{{-- {!! $posted->render(5) !!} --}}
	</sectio1n>
</body>
</html>