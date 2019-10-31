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
Route::view('main','test.select')->name('main')->middleware('auth');

// Questions for Ich Im Team-Privater Bereich


Route::view('ich-im-team1','test.ichimteam1')->name('ichimteam1')->middleware('auth');

Route::post('test1','TestsController@store')->name('store');

Route::view('success','success')->name('success');



// Questions for Ich Im Team-Beruflicher Bereich

Route::view('ich-im-team2','test.ichimteam2')->name('ichimteam2')->middleware('auth');

Route::post('test2','TestsController@store2')->name('store2');

// Questions for Kultur im Team

Route::view('kultur-im-team','test.kulturimteam')->name('kulturimteam');

Route::post('test3','TestsController@store3')->name('store3');




Auth::routes();

Route::get('/home','HomeController@index')->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


