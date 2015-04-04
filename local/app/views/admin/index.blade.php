<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Tux TV</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container">
		<h2>Admin de Laravel</h2>
		<div class="row">
			<div class="col-md-7">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Generos</h3>
					</div>
					<div class="panel-body">
						<p>Genero 
						<span class="btn btn-sm pull-right"><a href="admin/all-generos">todos </a></span>
						<span class="btn btn-sm pull-right"><a href="admin/new-genero"> + añadir </a></span>
						</p>
					</div>
				</div>
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Peliculas</h3>
					</div>
					<div class="panel-body">
						<p>Peliculas
						<span class="btn btn-sm pull-right"><a href="admin/all-pelicula">todos </a></span>
						<span class="btn btn-sm pull-right"><a href="admin/new-pelicula"> + añadir </a></span>
						</p>
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Detalle</h3>
					</div>
					<div class="panel-body">
						<p>Detalle (Asignar genero a pelicula)
						<span class="btn btn-sm pull-right"><a href="admin/all-detalle">todos </a></span>
						<span class="btn btn-sm pull-right"><a href="admin/new-detalle"> + añadir </a></span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>