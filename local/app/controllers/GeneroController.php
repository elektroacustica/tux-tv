<?php

class GeneroController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /genero
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Genero::all();
		return View::make('genero.index', compact('data'));
	}

	public function create()
	{
		return View::make('genero.create');
	}

	public function store()
	{
		$data = Input::except('_token');

		$rules = [
			'genero'	=> 'required | unique:generos,genero',
			'color'		=> 'required | unique:generos,color'
		];

		$validacion = Validator::make($data, $rules);

		if ($validacion->passes()) {
			$g = new Genero();
			$g->genero = Input::get('genero');
			$g->color = Input::get('color');
			$g->save();

			return Redirect::action('GeneroController@index');
		 } 

		return Input::all();
	}

	/**
	 * Display the specified resource.
	 * GET /genero/{id}
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
	 * GET /genero/{id}/edit
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
	 * PUT /genero/{id}
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
	 * DELETE /genero/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}