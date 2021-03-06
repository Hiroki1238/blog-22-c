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

/* 8-1
Route::get('/', function () {
   return view('index');
}); */

/* 8-2
Route::get('/', function() {
    return view('posts/index');
});
*/

/* 8-1
Route::get('/posts', 'PostController@index');
*/

Route::get('/', 'PostController@index'); //PostController.phpのindex()を呼び出してる
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts', 'PostController@store');

Route::put('/posts/{post}', 'PostController@update');
Route::get('/posts/{post}/edit', 'PostController@edit');

Route::delete('/posts/{post}', 'PostController@delete');

Route::get('/categories/{category}', 'CategoryController@index');