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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('index');
Route::view('about-us', 'about')->name('about');
Route::view('contact', 'contact.index')->name('contact');
Route::view('information', 'information.display')->name('information');
Route::view('model', 'information.model')->name('model');
Route::view('main','test.display')->name('main');


Auth::routes();

Route::get('/home','HomeController@index')->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


