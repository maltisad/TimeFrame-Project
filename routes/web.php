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

// Route::get('/',"PageController@home");
// Route::get('/contact',"PageController@contact");


Route::get('/',"PostController@index");
Route::get('/posts/{id}',"PostController@show");

Route::get('/admin/posts','PostAdminController@index');

Route::get('/admin/posts/create','PostAdminController@create');

Route::post('/admin/posts','PostAdminController@store');