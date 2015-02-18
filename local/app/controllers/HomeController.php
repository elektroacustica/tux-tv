<?php

class HomeController extends BaseController {

	public function welcome()
	{
		return View::make('hello', compact('id','titulo','url'));
	}

	public function show($id)
	{
		return View::make('home.show', compact('titulo'));
	}

}
