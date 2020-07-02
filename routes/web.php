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

Route::get('/', 'HomeController@home' );

Route::get('/pertanyaan', 'PertanyaanController@pertanyaan' );
Route::get('/pertanyaan/create', 'QnaController@create' );
Route::post('/pertanyaan', 'QnaController@pertanyaan_post' );
Route::get('/jawaban', 'QnaController@jawaban' );
Route::post('/jawaban', 'QnaController@jawaban_post' );

