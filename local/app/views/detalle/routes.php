<?php

Route::get('/admin/new-detalle/', 'DetalleController@create');

Route::post('/admin/new-detalle/', 'DetalleController@store');

Route::get('/admin/all-detalle/', 'DetalleController@index');

Route::get('/admin/detalle-{id}/', 'DetalleController@edit');

Route::put('/admin/detalle-{id}/', 'DetalleController@update');