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
Route::get('posts', 'PostsController@index');
Route::get('posts/search', 'PostsController@search');
Route::get('posts/searchlist', 'PostsController@searchlist');
Route::get('users/searchlist', 'UsersController@searchlist');

Route::get('posts/show', 'PostsController@show');

Route::get('posts/create', 'PostsController@create');
Route::post('posts', 'PostsController@store');

Route::get('posts/{post}/edit', 'PostsController@edit');
Route::put('posts/{post}', 'PostsController@update');

Route::get('posts/delete', 'PostsController@delete');


