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
			@foreach($detalle as $d)
			<h4>Atualizar genero para la pelicula <strong>{{ $d->titulo }}</strong></h4>
			<p>Genero Actual <strong>{{$d->genero  }}</strong></p>
			@endforeach
			{{ Form::open(['action' => ['DetalleController@update', $id], 'class' => 'formulario', 'method' => 'PUT']) }}
				<div class="form-group">
					<select name="genero_id" id="" class="form-control">
					@foreach($genero as $d)
							<option value="{{ $d->id }}">{{ $d->genero }}</option>
					@endforeach
					</select>
				</div>
				<div class="form-group">
					<button class="btn btn-danger">Actualizar</button>
				</div>
			{{ Form::close() }}
			</div>
	</div>
</body>
</html>