<?php

Route::get('/admin/new-pelicula', 'PeliculaController@create');

Route::get('/admin/all-pelicula', 'PeliculaController@index');

Route::post('/admin/new-pelicula', 'PeliculaController@store');