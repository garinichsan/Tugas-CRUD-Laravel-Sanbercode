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

Route::get('/', 'PertanyaanController@index' );

Route::get('/pertanyaan', 'PertanyaanController@index' );           // index pertanyaan
Route::get('/pertanyaan/create', 'PertanyaanController@create' );   // buat pertanyaan
Route::post('/pertanyaan', 'PertanyaanController@store' );          // simpan pertanyaan

Route::get('/jawaban/{id}', 'JawabanController@index' );            // index jawaban
Route::post('/jawaban/{id}', 'JawabanController@store' );           // simpan jawaban

Route::get('/pertanyaan/{id}', 'PertanyaanController@show' );       // detail pertanyaan
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit' );  // edit pertanyaan
Route::put('/pertanyaan/{id}', 'PertanyaanController@update' );  // edit pertanyaan
Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete' );    // hapus pertanyaan
