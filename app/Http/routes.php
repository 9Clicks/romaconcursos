<?php

Route::get('/', 'PrincipalController@index');
Route::get('/quem-somos', 'EmpresaController@index');
Route::get('/equipe', 'EquipeController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/contatos', 'ContatoController@index');
Route::get('/pre-inscricao', 'CadastroController@index');

Route::get('/preparatorio/agente-penitenciario', '_preAgenteController@index');
Route::get('/preparatorio/agente-penitenciario/detalhes/{id}', '_preAgenteController@detalhes');

Route::get('/preparatorio/bombeiro-militar', '_preBombeiroMController@index');
Route::get('/preparatorio/bombeiro-militar/detalhes/{id}', '_preBombeiroMController@detalhes');

Route::get('/preparatorio/enem', '_preENEMController@index');
Route::get('/preparatorio/enem/detalhes/{id}', '_preENEMController@detalhes');

Route::get('/preparatorio/inss', '_preINSSController@index');
Route::get('/preparatorio/inss/detalhes/{id}', '_preINSSController@detalhes');

Route::get('/preparatorio/oab', '_preOABController@index');
Route::get('/preparatorio/oab/detalhes/{id}', '_preOABController@detalhes');

Route::get('/preparatorio/policia-civil', '_prePCController@index');
Route::get('/preparatorio/policia-civil/detalhes/{id}', '_prePCController@detalhes');

Route::get('/preparatorio/prf', '_prePRFController@index');
Route::get('/preparatorio/prf/detalhes/{id}', '_prePRFController@detalhes');

Route::auth();

Route::get('/home', 'HomeController@index');
