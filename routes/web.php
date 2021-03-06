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

Route::auth();

Route::get('/', 'ProfileController@index');
Route::get('/profile/skills', 'ProfileController@skills');

Route::get('/skills', 'SkillController@index');
Route::get('/skills/list', 'SkillController@list');
Route::post('/skills', 'SkillController@store');