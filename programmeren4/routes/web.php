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

Route::resource('berichten', 'berichtenController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'berichtenController@search');

Route::get('/mijnberichten', 'HomeController@mijnberichten'); 


Route::get('/admin', 'adminController@admin')->middleware('is_admin')->name('admin');
Route::get('/adminberichten', 'adminController@berichten')->middleware('is_admin')->name('admin'); 
Route::get('/admingebruikers', 'adminController@gebruikers')->middleware('is_admin')->name('admin'); 

Route::post('/admin', ['uses'=>'adminController@updateberichten']);