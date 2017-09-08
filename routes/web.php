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


Auth::routes();

Route::get('login', 'PageController@login')->name('login');

Route::get('register', 'PageController@register')->name('register');

Route::get('/', 'PageController@index')->name('home');

Route::get('profile', 'UserController@index');

Route::post('profile', 'UserController@update');

Route::get('/profile/{id}', 'UserController@show')->where('id', '[0-9]+');

Route::get('/post', 'PostController@index')->name('Post');

Route::post('/search', 'SearchController@search');

Route::get('/post/{id}', 'PostController@show')->where('id', '[0-9]+')->name('Single Post');

Route::get('/post/create', 'PostController@create')->name('Create Post');

Route::post('/post/store', 'PostController@store');

Route::get('/post/edit/{id}', 'PostController@edit')->where('id', '[0-9]+');

Route::post('post/save', 'PostController@update');

Route::get('/post/delete/{id}','PostController@destroy')->where('id', '[0-9]+');

Route::get('/contacts', 'ContactController@index');

Route::get('/link', 'LinkController@index');

Route::get('/link/all', 'LinkController@all');

Route::get('/link/create', 'LinkController@create');

Route::post('/link/store', 'LinkController@store');

Route::post('/link/destroy/{id}', 'LinkController@destroy')->where('id', '[0-9]+');

Route::post('/contacts', 'ContactController@send');

Route::post('/subscribe', 'NewsletterController@subscribe');

Route::get('/category/{id}', 'CategoryController@index')->where('id', '[0-9]+');

Route::get('/category/create', 'CategoryController@create');

Route::post('/category/store', 'CategoryController@store');

Route::get('/quote', 'QuoteController@index');

Route::post('/quote/destroy/{id}', 'QuoteController@destroy')->where('id', '[0-9]+');

Route::get('/quote/create', 'QuoteController@create');

Route::post('/quote/store', 'QuoteController@store');

Route::get('/quote/daily', 'QuoteController@random');
