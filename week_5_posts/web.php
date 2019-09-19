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

Route::get('/index', 'ShowProfile@index');

Route::get('/about', function(){
    return view('pages.about');
});
Route::get('pages/about', 'ShowProfile@about');
Route::post('pages/about', 'ShowProfile@store');
Route::get('pages/edit/{id}', 'ShowProfile@edit');
Route::post('pages/update/{id}', 'ShowProfile@update')->name('updateuser');
Route::get('/destroy/{id}', 'ShowProfile@destroy');

Route::get('posts/posts','PostController@index');

Route::get('posts/create', 'PostController@create');
Route::post('posts/create', 'PostController@store');
Route::get('posts/posts/{id}/edit','PostController@edit');
Route::post('posts/posts', 'PostController@update');
Route::delete('posts/posts/{id}/delete', 'PostController@destroy');
Route::get('posts/posts/{id}/like', 'PostController@like');

Route::get('contact', 'HomeController@contact');
Route::get('about', 'HomeController@about');
Route::get('/', 'HomeController@index');
