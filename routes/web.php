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
Route::get('/posts/{post}',"PostController@show");
Route::post('/comments','CommentController@store');

Route::get('/admin/',function(){
	return redirect(url('/admin/posts'));
});
Route::get('/admin/posts','PostAdminController@index');

Route::get('/admin/posts/create','PostAdminController@create');
Route::get('/admin/posts/{post}/edit','PostAdminController@edit');

Route::post('/admin/posts','PostAdminController@store');
Route::put('/admin/posts/{post}','PostAdminController@update');
Route::delete('/admin/posts/{post}','PostAdminController@destroy');

// Route::resource('PostAdminController');
//post - store
//get - show
//patch - update
//put - update
//delete - delete