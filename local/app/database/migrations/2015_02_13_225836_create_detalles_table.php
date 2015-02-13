<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('genero_id')->unsigned();
			$table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');
			$table->integer('pelicula_id')->unsigned();
			$table->foreign('pelicula_id')->references('id')->on('peliculas')->onDelete('cascade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalles');
	}

}
