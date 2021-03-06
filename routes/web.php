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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/master', function(){
// 	return view('admin.master');
// });
Route::get('/', 'AdminController@index');
Route::get('/data-tables','AdminController@dataTables');

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');//panggil dri function store
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');

Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');

Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');