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
//blog
Route::name('blogs_path')->get('/blogs','BlogsController@index');
Route::name('create_blog_path')->get('/blogs/create','BlogsController@create');
Route::name('store_blog_path')->post('/blogs','BlogsController@store');
Route::name('blog_path')->get('/blogs/{id}','BlogsController@show');
Route::name('edit_blog_path')->get('/blogs/{id}/edit','BlogsController@edit');
Route::name('update_blog_path')->put('/blogs/{id}','BlogsController@update');
Route::name('delete_blog_path')->delete('/blogs/{id}', 'BlogsController@destroy');
//form
Route::name('form_path')->get('/form','FormController@index');
Route::name('store_form_path')->post('/form','FormController@store');
