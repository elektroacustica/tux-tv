<?php

class HomeController extends BaseController {

	public function welcome()
	{
		return View::make('hello', compact('id','titulo','url'));
	}

	public function show($id)
	{
		$data = Pelicula::find($id);
		return View::make('home.show', compact('data'));
	}

	public function contenido()
	{
		$pelicula = DB::table('peliculas')->join('detalles', 'peliculas.id', '=', 'detalles.titulo_id')->where('genero_id', '=', 1)->paginate(8);
		$reciente = Pelicula::orderBy('created_at', 'DESC')->take(8)->get();
		return View::make('home.contenido', compact('pelicula', 'reciente', 'genero'));
	}

	public function genero($id)
	{
		return View::make('home.genero');
	}

}
