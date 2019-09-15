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
Route::get('/delete/{id}', 'ShowProfile@destroy');
