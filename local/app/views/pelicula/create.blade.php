<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Tux TV</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<div class="container">
		<h2>Admin de Laravel</h2>
		<div class="row">
			<div class="col-md-7">
				{{ Form::open(['url' => 'admin/new-pelicula', 'files' => true, 'class' => 'formulario']) }}
					<div class="form-group">
						{{ Form::label('titulo', 'Nombre de la pelicula') }}
						{{ Form::text('titulo', null, ['class' => 'form-control']) }}
						{{ $errors->first('titulo', '<p class="text-danger">:message</p>'); }}
					</div>
					<div class="form-group">
						{{ Form::label('photo', 'Imagen') }}
						{{ Form::file('photo', ['class' => 'form-control']) }}
						{{ $errors->first('photo', '<p class="text-danger">:message</p>'); }}
					</div>
					<div class="form-group">
						{{ Form::label('url', 'Link') }}
						{{ Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'http://www.pelicula.com/titulo']) }}
						{{ $errors->first('url', '<p class="text-danger">:message</p>'); }}
					</div>
					<div class="form-group">
						{{ Form::label('descripcion', 'Descripcion ') }}
						{{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
						{{ $errors->first('descripcion', '<p class="text-danger">:message</p>'); }}
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