<?php

Route::get('/', 'PrincipalController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
