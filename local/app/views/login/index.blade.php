<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body id="landing">
	<div class="container">
	<h1 class="text-center">Login</h1>
	<div class="row">
		<div class="col-md-3">
			<figure class="text-center">
				<img src="{{ asset('svg/medal.svg') }}" alt="" width="100%">
			</figure>
		</div>
		<div class="col-md-6">
			{{ Form::open(['login', 'class' => 'formulario']) }}
			<div class="form-group">
				{{ Form::label('username', 'Username') }}
				{{ Form::text('username', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password', ['class' => 'form-control']) }}
			</div>
			{{ Form::close() }}
		</div>
		<div class="ocl-md-3"></div>
	</div>
		
	</div>
</body>
</html>