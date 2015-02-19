<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Tux TV</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<div class="container">
		<h2>Admin de Laravel</h2>
		<p>
			<a href="new-pelicula">
				<button class="btn btn-success">+ añadir</button>
			</a>
			<a href="{{ asset('/admin') }}">
				<button class="btn btn-success">Ir al Admin</button>
			</a>
		</p>
		<div class="row">
			<div class="col-md-12 text-center">
			@foreach($data as $d)
			<div class="item-cover">
				<figure>
					<img src="{{ asset('cover') }}/{{ $d->url }}" alt="" class="cover">
					<figcaption>
						<p class="text-center">{{ $d->titulo }}</p>
					</figcaption>
				</figure>
			</div>
			@endforeach
			</div>
		</div>
	</div>
</body>
</html>