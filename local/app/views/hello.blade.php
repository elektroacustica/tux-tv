<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tux TV</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Tux TV</h1>
		<div class="row">
			<figure class="text-center animated zoomIn">
				<img src="img/logo.png" alt="Tux TV" title="Tux TV" id="logo" />
			</figure>
			<p class="text-center">
				<buttom class="btn btn-primary btn-lg">Registrarse</buttom>
				<buttom class="btn btn-primary btn-lg">Entrar</buttom>
			</p>
		</div>

		<div class="row black">
			<div class="col-md-10">
				<h2>Estrenos</h2>
				<div class="media desc">
					<div class="media-left text-center">
						<img src="http://felitoscorp.com/roku/imagenes/peliculas/el_juez_sd2.jpg" alt="">
						<a href="{{URL::action('HomeController@show', [$id,$url])}}">
							<button class="btn btn-danger btn-sm">! Mirar ahora !</button>
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">{{ $titulo }}</h4>
						<p class="text-justify">Hank Palmer (Robert Downey Jr.), un importante abogado, regresa a su hogar tras la muerte de su madre. Se entera entonces de que su padre (Robert Duvall), que es {{ $titulo }} del pueblo y de quien est   distanciado, es sospechoso de haber cometido un crimen. Su decisi  n de investigar el caso lo lleva poco a poco a restablecer con los suyos una relaci  n que estaba rota.</p>
					</div>
				</div>
				<div class="media desc">
					<div class="media-left text-center">
						<img src="http://felitoscorp.com/roku/imagenes/peliculas/el_juez_sd2.jpg" alt="">
						<a href="{{URL::action('HomeController@show', [$id,$url])}}">
							<button class="btn btn-danger btn-sm">Mirar ahora!</button>
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">{{ $titulo }}</h4>
						<p class="text-justify">Hank Palmer (Robert Downey Jr.), un importante abogado, regresa a su hogar tras la muerte de su madre. Se entera entonces de que su padre (Robert Duvall), que es {{ $titulo }} del pueblo y de quien est   distanciado, es sospechoso de haber cometido un crimen. Su decisi  n de investigar el caso lo lleva poco a poco a restablecer con los suyos una relaci  n que estaba rota.</p>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		
	</div>
	
</body>
</html>