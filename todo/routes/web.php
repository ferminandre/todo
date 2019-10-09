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

Route::get('todo', 'todoController@index')->name('todoIndex');
Route::get('todo/{id}/details', 'todoController@getById')->name('getById');
Route::get('todo/finished', 'todoController@finishedTodo')->name('finishedTodo');
Route::get('todo/new', 'todoController@new')->name("newTodo");
Route::post('todo/new', 'todoController@create')->name("addTodo");
Route::get('todo/{id}/edit', 'todoController@edit')->name("editTodo");
Route::post('todo/{id}/edit', 'todoController@update')->name("updateTodo");
Route::get('todo/{id}/delete', 'todoController@delete')->name("deleteTodo");
