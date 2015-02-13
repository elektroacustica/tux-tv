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
				{{ Form::open(['url' => 'admin/new-pelicula']) }}
					<div class="form-group">
						{{ Form::label('titulo', 'Nombre de la pelicula') }}
						{{ Form::text('titulo', null, ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('genero', 'Nombre de la pelicula') }}
						<select name="genero_id" class="form-control">
							@foreach($data as $d)
							<option value="{{ $d->id }}">{{ $d->genero }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						{{ Form::label('url', 'Link de la pelicula') }}
						{{ Form::text('url', null, ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('portada', 'Portada') }}
						{{ Form::text('portada', null, ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('imagen', 'Imagen') }}
						{{ Form::text('imagen', null, ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('descripcion', 'Descripcion ') }}
						{{ Form::text('descripcion', null, ['class' => 'form-control']) }}
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