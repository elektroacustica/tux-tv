<?php

class GeneroTableSeeder extends Seeder {

	public function run()
	{
		Genero::create([
			'genero'	=> 'Estreno',
			'color'		=> '#ff11fa'
		]);
	}

}