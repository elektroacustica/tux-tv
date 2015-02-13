<?php

Route::get('/admin/new-genero', 'GeneroController@create');

Route::post('/admin/new-genero', 'GeneroController@store');

Route::get('/admin/all-generos', 'GeneroController@index');