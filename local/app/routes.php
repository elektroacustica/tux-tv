<?php

require 'views/admin/routes.php';
require 'views/detalle/routes.php';
require 'views/genero/routes.php';
require 'views/login/routes.php';
require 'views/pelicula/routes.php';

Route::get('/', 'HomeController@welcome');

Route::get('/data/{id}', 'HomeController@show');