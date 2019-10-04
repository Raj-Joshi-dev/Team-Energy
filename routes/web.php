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

Route::get('ques','TestsController@show');
Route::view('ques1','test.ichimteam1.ques1')->name('ques1');
Route::view('ques2','test.ichimteam1.ques2')->name('ques2');
Route::view('ques3','test.ichimteam1.ques3')->name('ques3');
Route::view('ques4','test.ichimteam1.ques4')->name('ques4');
Route::view('ques5','test.ichimteam1.ques5')->name('ques5');
Route::view('ques6','test.ichimteam1.ques6')->name('ques6');
Route::view('ques7','test.ichimteam1.ques7')->name('ques7');
Route::view('ques8','test.ichimteam1.ques8')->name('ques8');
Route::view('ques9','test.ichimteam1.ques9')->name('ques9');
Route::view('ques10','test.ichimteam1.ques10')->name('ques10');
Route::view('ques11','test.ichimteam1.ques11')->name('ques11');
Route::view('ques12','test.ichimteam1.ques12')->name('ques12');
Route::view('ques13','test.ichimteam1.ques13')->name('ques13');
Route::view('ques14','test.ichimteam1.ques14')->name('ques14');
Route::view('ques15','test.ichimteam1.ques15')->name('ques15');
Route::view('ques16','test.ichimteam1.ques16')->name('ques16');
Route::view('ques17','test.ichimteam1.ques17')->name('ques17');
Route::view('ques18','test.ichimteam1.ques18')->name('ques18');
Route::view('ques19','test.ichimteam1.ques19')->name('ques19');
Route::view('ques20','test.ichimteam1.ques20')->name('ques20');

Route::get('store','TestsController@store');


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


