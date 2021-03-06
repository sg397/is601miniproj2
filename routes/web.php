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

Route::get('/', 'ContactPageController@home')->name('home');
Route::get('/contact', 'ContactPageController@contact')->name('contact');
Route::post('/contact', 'ContactPageController@store')->name('contact.store');
Route::get('/thanks/{name}', 'ContactPageController@thanks')->name('thanks');
Route::get('/about', 'AboutPageController@about')->name('about');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

