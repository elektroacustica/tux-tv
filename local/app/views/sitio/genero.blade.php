<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $data->genero }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="fondo">
	<div class="container">
		<h1 class="text-center">Las mejores Films de {{$data->genero}}</h1>

		<div class="row">
			<div class="col-md-3">
				<h3 class="msg">
					<i class="fa fa-plus-square"></i>
					Generos
				</h3>
				<section class="text-center fondo--color">
					@foreach($genero as $d )
					<a href="{{ URL::action('HomeController@generoID', $d->id) }}" class="no--a">
						<button class="btn btn-warning btn-block">{{$d->genero}}</button>
					</a>
					@endforeach
				</section>
			</div>
			<div class="col-md-9">
				<h2 class="msg--color--red msg">
					<i class="fa fa-star"></i>
					{{$data->genero}}
				</h2>
				<figure class="text-center fondo--color">
				@foreach($pelicula as $d)
					<a href="{{ URL::action('HomeController@show', $d->id) }}">
						<img src="{{ asset('cover') }}/{{ $d->photo }}" class="caratula" data-toggle="tooltip" data-placement="bottom" title="{{ $d->titulo }}" />	
					</a>
				@endforeach
				</figure>
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