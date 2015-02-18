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
			@foreach($data as $d)
			<p>{{ $d->titulo }}</p>
			<img src="{{ asset('cover') }}/{{ $d->url }}" alt="">
			@endforeach
			</div>
		</div>
	</div>
</body>
</html>