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

Route::get('/', 'PageController@show');
Route::post('insert', 'PageController@insert');
Route::get('{page}/delete', 'PageController@delete');
Route::get('{page}', 'PageController@showPage');

// sote notes

Route::post('{pageid}/note/insert', 'NoteController@insert');
Route::get('note/{noteid}/edit', 'NoteController@edit');
Route::post('note/{noteid}/update', 'NoteController@update');
Route::get('note/{noteid}/delete', 'NoteController@delete');