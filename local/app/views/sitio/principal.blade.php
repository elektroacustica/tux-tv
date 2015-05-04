<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="fondo">
	<div class="container">
		<h1 class="text-center">Las mejores Films de</h1>

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
				@foreach($genero as $g)
				<a href="{{ URL::action('HomeController@generoID', $g->id) }}" class="no--a">
					<h2 class="msg--color--red msg">
						<i class="fa fa-star"></i>
						{{$g->genero}}
					</h2>
				</a>
					<figure class="text-center fondo--color">
					@foreach($data as $d)
						@if($d->genero_id == $g->id)
						<a href="{{ URL::action('HomeController@show', $d->id) }}">
							<img src="{{ asset('cover') }}/{{ $d->photo }}" class="caratula" data-toggle="tooltip" data-placement="bottom" title="{{ $d->titulo }}" />	
						</a>
						@endif
					@endforeach
					</figure>
				@endforeach
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