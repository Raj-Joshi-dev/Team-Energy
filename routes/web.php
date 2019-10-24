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
Route::view('main','test.select')->name('main');

// Questions for Ich Im Team-Privater Bereich


Route::view('ques','test.ichimteam1.ques')->name('test.show')->middleware('auth');

Route::post('test','TestsController@store')->name('test.store');

Route::view('/test/sucess','success')->name('success');



// Questions for Ich Im Team-Beruflicher Bereich

Route::view('test2','test.ichimteam2')->name('test2');

// Questions for Kultur im Team

Route::view('test3','test.kulturimteam')->name('test3');




Auth::routes();

Route::get('/home','HomeController@index')->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


