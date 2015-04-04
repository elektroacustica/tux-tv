<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $data->titulo }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="background--color">
	<h1 class="text-center titulo">{{ $data->titulo }}</h1>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="media desc">
				<div class="media-left text-center">
					<img src="{{ asset('cover/') }}/{{ $data->photo }}" alt="" class="animated bounceInUp">
					{{-- <a href="">
						<button class="btn btn-danger btn-sm">Mirar ahora!</button>
					</a> --}}
				</div>
				<div class="media-body">
					<h3 class="media-heading text-center">{{ $data->titulo }}</h3>
					<p class="text-justify">{{ $data->descripcion }}</p>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<video controls poster="" width="100%" height="400px" class="animated zoomIn">
					<source src="{{ $data->url }}">
					<p class="text-danger">Esto es vergonzoso pero tu navegador no soporta video</p>
				</video>
			</div>
		</div>
	</div>
	
</body>
</html>