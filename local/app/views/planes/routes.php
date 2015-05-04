<?php

Route::get('/admin/all-planes', 'PlanController@index');

Route::get('/admin/new-planes', 'PlanController@create');

Route::post('/admin/new-planes', 'PlanController@store');

Route::get('/admin/plan-{id}/', 'PlanController@edit');

Route::put('/admin/plan-{id}/', 'PlanController@update');