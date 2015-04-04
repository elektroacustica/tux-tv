<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Tux TV</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container">
		<h2>Admin de Laravel</h2>
		<div class="row">
			<div class="col-md-8">
			@foreach($data as $d)
			<button class="btn" style="background: {{ $d->color }}">{{ $d->genero }}</button>
			@endforeach
			</div>
			<div class="col-md-4">
				<a href="new-genero">
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