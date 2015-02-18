<?php

class PeliculaController extends \BaseController {

	public function index()
	{
		$data = Pelicula::all();
		return View::make('pelicula.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pelicula/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pelicula.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pelicula
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::except('_token');


		$rules = [
			'titulo'		=> 'required | unique:peliculas,titulo',
			'photo'			=> 'required | mimes:jpeg,jpg,png',
			'descripcion'	=> 'required'
		];

		$validacion = Validator::make($data, $rules);

		if ($validacion->passes()) {
			$file = Input::file('photo');
			$extension = Input::file('photo')->getClientOriginalExtension();
			$g = new Pelicula();
			$g->titulo = Input::get('titulo');
			$g->photo = Str::slug(Input::get('titulo')).'.'.$extension;
			$g->url = Str::slug(Input::get('titulo')).'.'.$extension;
			$g->descripcion = Input::get('descripcion');
			$g->save();

			$file->move("cover", Str::slug(Input::get('titulo')).'.'.$extension);

			return Redirect::action('PeliculaController@index');
		 } 

		return Redirect::back()->withInput()->withErrors($validacion->messages());
	}

	/**
	 * Display the specified resource.
	 * GET /pelicula/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pelicula/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pelicula/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pelicula/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}