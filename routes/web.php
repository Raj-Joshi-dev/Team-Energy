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
use Admin\UserController;
use Admin\TeamController;

// Disable User registration
Auth::routes(['register' => false]);

Route::view('/', 'home')->name('home');
Route::view('about-us', 'about')->name('about');
Route::view('contact', 'contact.index')->name('contact');
Route::view('information', 'information.display')->name('information');
Route::view('model', 'information.model')->name('model');
Route::get('dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Ich Im Team-Privater Bereich


Route::get('ich-im-team1', 'QuestionsController@add_ichimteam1')->name('ichimteam1')->middleware('auth');

Route::post('test1', 'ResultController@store1')->name('store1');

Route::get('result1={id}', 'ResultController@result1')->name('result1')->middleware('auth');

Route::view('ichimteam1_graph', 'graphs.ichimteam1_graph')->name('ichimteam1_graph');



// Ich im Team-Beruflicher Bereich

Route::get('ich-im-team2', 'QuestionsController@add_ichimteam2')->name('ichimteam2')->middleware('auth');

Route::post('test2', 'ResultController@store2')->name('store2');

Route::get('result2={id}', 'ResultController@result2')->name('result2')->middleware('auth');

Route::view('ichimteam2_graph', 'graphs.ichimteam2_graph')->name('ichimteam2_graph');

// Kultur im Team - mein Einschätzung

Route::get('kultur-im-team', 'QuestionsController@add_kulturimteam')->name('kulturimteam')->middleware('auth');

Route::post('test3', 'ResultController@store3')->name('store3');

Route::get('result3={id}', 'ResultController@result3')->name('result3')->middleware('auth');

Route::view('kulturimteam_graph', 'graphs.kulturimteam_graph')->name('kulturimteam_graph');


// Potential im Team

Route::get('potentialimteam', 'PotentialController@potential_graph')->name('potentialimteam')->middleware('auth');

Route::view('potentialim_graph', 'graphs.potentialimteam_graph')->name('potentialimteam_graph');

// Kultur im Team - unsere Einschätzungen

Route::view('kulturimteam2_graph', 'graphs.kulturimteam2_graph')->name('kulturimteam2');


// Admin Area
//Route::resource('/admin/users', \App\Http\Controllers\Admin\UserController::class);

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function (){
    Route::resource('/users', UserController::class);
    Route::resource('/teams',TeamController::class);
});


//Route::get('/home', 'HomeController@index')->name('home');
