<?php

Route::get('/admin/', 'AdminController@index');

Route::post('/admin/', 'AdminController@store');