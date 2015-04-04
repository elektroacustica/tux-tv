<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Tux TV</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"><link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<div class="container">
		<h2>Admin de Laravel</h2>
		<div class="row">
			<div class="col-md-7">
				{{ Form::open(['url' => 'admin/new-genero', 'class' => 'formulario']) }}
					<div class="form-group">
						{{ Form::label('genero', 'Nombre del genero') }}
						{{ Form::text('genero', null, ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('color', 'Color') }}
						<input type="color" class="form-control" name="color">
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</body>
</html>