<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function(){
	Route::resource('profesores','ProfesoresController');
	/*Route::get('users/{id}/destroy', [
		'uses'=>'UsersController@destroy',
		'as'=>'admin.users.destroy'
	]);*/
});

Route::group(['prefix'=>'filtro'], function(){
	Route::get('materia/{string}','ProfesoresController@materia');
	/*Route::get('users/{id}/destroy', [
		'uses'=>'UsersController@destroy',
		'as'=>'admin.users.destroy'
	]);*/
});

Route::group(['prefix'=>'filtro'], function(){
	Route::get('facultad/{string}','ProfesoresController@facultad');
	/*Route::get('users/{id}/destroy', [
		'uses'=>'UsersController@destroy',
		'as'=>'admin.users.destroy'
	]);*/
});