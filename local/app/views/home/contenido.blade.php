<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tux TV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="fondo">
	<div class="container">
		<figure class="text-left animated zoomIn">
			<img class="pull-left" src="{{ asset('img/logo.png') }}" alt="Tux TV" title="Tux TV" width="200" />
			<h1 class="text-center">El mejor contenido solo en Tux-TV</h1>
		</figure>
		<div class="row">
			<div class="col-md-12">
				<h2 class="msg"><i class="fa fa-star"></i> Estrenos <a href="">
				<button class="pull-right btn btn-success btn-lg">Contrata tu plan ahora</button>
			</a></h2>
				<figure class="text-center fondo--color">
					@foreach($pelicula as $d)
					<a href="pelicula/{{ $d->id }}">
						<img src="{{ asset('cover') }}/{{ $d->photo }}" class="caratula" data-toggle="tooltip" data-placement="bottom" title="{{ $d->titulo }}" />	
					</a>
					@endforeach
				</figure>
				{{ $pelicula->links() }}
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2 class="msg"><i class="fa fa-star"></i> Ultimas Agregadas <a href="">
				<button class="pull-right btn btn-success btn-lg">Contrata tu plan ahora</button>
			</a></h2>
				<figure class="text-center fondo--color">
				@foreach($reciente as $d)
					<a href="pelicula/{{ $d->id }}">
						<img src="{{ asset('cover') }}/{{ $d->photo }}" class="caratula" data-toggle="tooltip" data-placement="bottom" title="{{ $d->titulo }}" />	
					</a>
				@endforeach
				</figure>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2 class="msg--color--red msg">
					<i class="fa fa-star"></i>
					<a href="{{ URL::action('HomeController@principal') }}" class="no--a">¡Ver mas!</a>
				</h2>
			</div>
		</div>
	</div>
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>
</body>
</html>