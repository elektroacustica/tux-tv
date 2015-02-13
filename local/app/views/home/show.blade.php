<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $titulo }}</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<h1 class="text-center titulo">{{ $titulo }}</h1>
	<div class="container">
		<div class="row">
		</div>

		<div class="row text-center">
			<div class="col-md-4">
				<figure class="text-center">
					<img src="{{ asset('img/logo.png') }}" alt="Tux TV" title="Tux TV" id="logo-canal" class="animated bounceInUp" />
				</figure>
			</div>
			<div class="col-md-8">
				<video controls poster="" width="100%" height="400px" class="animated zoomIn">
					<source src="http://felitoscorp.com/roku/peliculas/estrenos/el_juez_2014_sd.mp4" type="video/mp4">
					<p class="text-danger">Esto es vergonzoso pero tu navegador no soporta video</p>
				</video>
			</div>
		</div>
	</div>
	
</body>
</html>