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
				{{ Form::open(['url' => 'admin/new-detalle', 'class' => 'formulario']) }}
					<div class="form-group">
						{{ Form::label('titulo_id', 'Pelicula') }}
						<select name="titulo_id" id="" class="form-control">
							@foreach($pelicula as $p)
							<option value="{{ $p->id }}">{{ $p->titulo }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						{{ Form::label('genero_id', 'Genero') }}
						<select name="genero_id" id="" class="form-control">
							@foreach($genero as $g)
							<option value="{{ $g->id }}">{{ $g->genero }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				{{ Form::close() }}
			</div>
			<div class="col-md-5">

				<a href="{{ asset('/admin') }}">
					<button class="btn btn-success">Ir al Admin</button>
				</a>
			</div>
		</div>
	</div>
</body>
</html>