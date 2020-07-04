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

Route::get('/', 'QuestionController@index');

Route::get('/questions', 'QuestionController@index');
Route::get('/questions/create', 'QuestionController@create');
Route::post('/questions', 'QuestionController@store');
Route::get('/answer/{id}', 'AnswersController@index');
Route::get('/answer/create/{id}', 'AnswersController@create');
Route::post('/answer', 'AnswersController@store');
Route::get('/questions/{id}','QuestionController@show');
Route::put('/questions/{id}','QuestionController@update');
Route::delete('/questions/{id}','QuestionController@destroy');
