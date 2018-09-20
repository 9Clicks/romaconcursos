<?php

Route::get('/', 'PrincipalController@index');
Route::get('/quem-somos', 'EmpresaController@index');
Route::get('/equipe', 'EquipeController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/contatos', 'ContatoController@index');

Route::get('/preparatorio/agente-penitenciario', '_preAgenteController@index');
Route::get('/preparatorio/agente-penitenciario/detalhes/{id}', '_preAgenteController@detalhes');




Route::get('/preparatorio/bombeiro-militar', 'PreBombeiroController@index');
Route::get('/preparatorio/policia-civil', 'PrePoliciaCController@index');
Route::get('/preparatorio/inss', 'PreInssController@index');
Route::get('/preparatorio/prf', 'PrePRFController@index');
Route::get('/preparatorio/oab', 'PreOABController@index');

Route::get('/preparatorio/enem', 'PreENEMController@index');

Route::get('/preparatorio/bombeiro-militar/detalhes/{id}', 'PreBombeiroController@detalhes');
Route::get('/preparatorio/policia-civil/detalhes/{id}', 'PrePoliciaCController@detalhes');

Route::get('/preparatorio/enem/detalhes/{id}', 'PreENEMController@detalhes');
Route::get('/preparatorio/inss/detalhes/{id}', 'PreInssController@detalhes');
Route::get('/preparatorio/oab/detalhes/{id}', 'PreOABController@detalhes');
Route::get('/preparatorio/prf/detalhes/{id}', 'PrePRFController@detalhes');

Route::auth();

Route::get('/home', 'HomeController@index');
