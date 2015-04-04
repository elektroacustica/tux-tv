<?php

class DetalleController extends \BaseController {

	public function index()
	{
		$data = DB::select('SELECT titulo, genero, detalles.id as detalle_id, color FROM peliculas, generos, detalles 
			WHERE peliculas.id = detalles.titulo_id
			AND generos.id = detalles.genero_id ORDER BY genero, peliculas.updated_at');
		return View::make('detalle.index', compact('data'));
	}

	public function create()
	{
		$pelicula = DB::select('SELECT * FROM peliculas WHERE peliculas.id not in (SELECT titulo_id from detalles)');
		$genero = Genero::all();
		return View::make('detalle.create' , compact('pelicula', 'genero'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /detalle
	 *
	 * @return Response
	 */
	public function store()
	{
		$d = new Detalle();
		$d->titulo_id = Input::get('titulo_id');
		$d->genero_id = Input::get('genero_id');
		$d->save();

		return Redirect::action('DetalleController@index');
	}

	/**
	 * Display the specified resource.
	 * GET /detalle/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	public function edit($id)
	{
		$detalle = DB::select('SELECT titulo, genero FROM peliculas, detalles, generos where peliculas.id = ?
			AND peliculas.id = detalles.titulo_id
			AND generos.id = detalles.genero_id',[$id]);
		$genero = Genero::all();
		return View::make('detalle.edit', compact('detalle', 'genero', 'id'));	
	}

	public function update($id)
	{
		$data = Detalle::find($id);
		$data->genero_id = Input::get('genero_id');
		$data->save();

		return Redirect::action('DetalleController@index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /detalle/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}