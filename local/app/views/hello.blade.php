<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tux TV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body id="landing">
	<header class="container">
		<h1 class="text-center">Tux TV</h1>
		<div class="text-right">
			<a href="login">
				<button class="btn btn-primary">Iniciar Sesión</button>
			</a>
		</div>
		<figure class="text-left animated zoomIn">
			<img src="img/logo.png" alt="Tux TV" title="Tux TV" id="logo" />
		</figure>
		<div id="slogan">
			<h2 class="shadow-white">Mira las peliculas de estreno y mucho mas.</h2>
			<a href="">
				<button class="btn btn-success btn-lg">Contrata tu plan ahora</button>
			</a>
			<a href="contenido">
				<button class="btn btn-danger btn-lg">Mira nuestro contenido</button>
			</a>
		</div>
		<div class="row">
			<div class="col-md-4-"></div>
			<div class="col-md-4-">
				<h2 class="label label-primary"></h2>
			</div>
			<div class="col-md-4-"></div>
		</div>
	</header>
	
</body>
</html>