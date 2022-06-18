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

Route::get('/', 'PostController@index'); //PostController.phpのindex()を呼び出してる,一覧を表示できる
Route::get('/posts/{post}', 'PostController@show');  //動画の説明だとこれがあった,特定の記事だけ表示するためにshowメソッドを利用する