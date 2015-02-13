<?php

class HomeController extends BaseController {

	public function welcome()
	{
		$id = 1;
		$titulo = 'El juez';
		$url = camel_case($titulo);
		return View::make('hello', compact('id','titulo','url'));
	}

	public function show($id, $url)
	{
		$titulo = 'El juez';
		return View::make('home.show', compact('titulo'));
	}

}
