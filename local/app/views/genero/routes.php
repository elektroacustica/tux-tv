<?php

Route::get('/admin/new-genero', 'GeneroController@create');

Route::get('/admin/all-generos', 'GeneroController@index');

Route::post('/admin/new-genero', 'GeneroController@store');