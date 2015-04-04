<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Tux TV</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<div class="container">
		<h2>Admin de Laravel</h2>
		<div class="row">
			<div class="col-md-7">
			@foreach($data as $d)
			<a href="detalle-{{ $d->detalle_id }}">
				<button class="btn btn-primary" style="background: {{ $d->color }}">
					<p>{{ $d->titulo }}</p> <span class="badge">{{ $d->genero }}</span>
					<i class="fa fa-refresh"></i>
				</button>
			</a>
			@endforeach
			</div>
			<div class="col-md-5">
				<a href="new-detalle">
					<button class="btn btn-success">+ añadir</button>
				</a>
				<a href="{{ asset('/admin') }}">
					<button class="btn btn-success">Ir al Admin</button>
				</a>
			</div>
		</div>
	</div>
</body>
</html>