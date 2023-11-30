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

Route::get('/usuarios', 'UserController@index')
    ->name('users.index');

Route::get('usuarios/nuevo', 'UserController@create')
    ->name('users.create');
Route::post('usuarios', 'UserController@store')
    ->name('user.store');
Route::get('usuarios/{user}/editar', 'UserController@edit')
    ->name('user.edit');
Route::put('usuarios/{user}', 'UserController@update')
    ->name('user.update');
Route::delete('usuarios/{user}', 'UserController@destroy')
    ->name('user.destroy');
Route::get('usuarios/{user}', 'UserController@show')
    ->name('users.show');

Route::get('editar-perfil', 'ProfileController@edit');
Route::put('editar-perfil', 'ProfileController@update');


Route::get('profesiones', 'ProfessionController@index')
    ->name('profession.index');

Route::get('habilidades', 'SkillController@index')
    ->name('skill.index');

Route::delete('profesiones/{profession}', 'ProfessionController@destroy');