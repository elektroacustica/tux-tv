<?php

class HomeController extends BaseController {

	public function welcome()
	{
		return Genero::all();
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

	public function genero()
	{
		$data = Genero::all();
		return View::make('home.genero', compact('data'));
	}

	public function generoID($id)
	{
		$data = Genero::find($id);
		$genero = Genero::all();
		$pelicula = DB::table('peliculas')->join('detalles', 'peliculas.id', '=', 'detalles.titulo_id')->where('genero_id', '=', $id)->paginate(8);
		return View::make('sitio/genero', compact('data', 'genero', 'pelicula'));
	}

	public function principal()
	{
		$genero = Genero::orderBy('id')->get();
		$data = DB::table('peliculas')->join('detalles', 'peliculas.id', '=', 'detalles.titulo_id')->orderBy('genero_id')->get();
		return View::make('sitio/principal', compact('genero', 'data'));
	}

}
