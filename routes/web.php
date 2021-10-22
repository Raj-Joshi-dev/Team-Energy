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


use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IchimTeamBerufController;
use App\Http\Controllers\IchimTeamPrivatController;
use App\Http\Controllers\PotentialController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

// Disable User registration
Auth::routes(['register' => false]);

Route::view('/', 'home')->name('home');
Route::view('about-us', 'about')->name('about');
Route::view('contact', 'contact.index')->name('contact');
Route::view('information', 'information.display')->name('information');
Route::view('model', 'information.model')->name('model');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'auth.timeout']);

// Ich Im Team-Privater Bereich


Route::get('ich-im-team1', [QuestionsController::class ,'add_ichimteam1'])->name('ichimteam1')->middleware(['auth', 'auth.timeout']);

Route::post('test1', [IchimTeamPrivatController::class ,'privat_store'])->name('store1');

Route::get('result1={id}', [IchimTeamPrivatController::class ,'privat_result'])->name('result1')->middleware(['auth', 'auth.timeout', 'auth.result-access']);

Route::view('ichimteam1_graph', 'graphs.ichimteam1_graph')->name('ichimteam1_graph');



// Ich im Team-Beruflicher Bereich

Route::get('ich-im-team2', [QuestionsController::class, 'add_ichimteam2'])->name('ichimteam2')->middleware(['auth', 'auth.timeout']);

Route::post('test2', [IchimTeamBerufController::class, 'beruf_store'])->name('store2');

Route::get('result2={id}', [IchimTeamBerufController::class, 'beruf_result'])->name('result2')->middleware(['auth', 'auth.timeout', 'auth.result-access']);

Route::view('ichimteam2_graph', 'graphs.ichimteam2_graph')->name('ichimteam2_graph');

// Potential im Team

Route::get('test3', [PotentialController::class,'potential_store'])->name('potentialimteam')->middleware(['auth', 'auth.timeout']);

Route::get('result3={id}', [PotentialController::class,'potential_result'])->name('result3')->middleware(['auth', 'auth.timeout', 'auth.result-access']);


// Kultur im Team - mein Einschätzung

Route::get('kultur-im-team', [QuestionsController::class ,'add_kulturimteam'])->name('kulturimteam')->middleware(['auth', 'auth.timeout']);

Route::post('test4', [ResultController::class ,'store3'])->name('store3');

Route::get('result4={id}', [ResultController::class,'result3'])->name('result4')->middleware(['auth', 'auth.timeout', 'auth.result-access']);

Route::view('kulturimteam_graph', 'graphs.kulturimteam_graph')->name('kulturimteam_graph');

// Kultur im Team - unsere Einschätzungen

Route::view('kulturimteam2_graph', 'graphs.kulturimteam2_graph')->name('kulturimteam2');


// Generate Graph from Admin Panel
Route::get('/results/{id}/graph', [ResultController::class, 'generate_graph'])->name('generate_graph')->middleware(['auth', 'auth.timeout']);

// Admin Area
Route::get('/admin', [UserController::class, 'admin'])->middleware(['auth', 'is_admin', 'auth.timeout'])->name('admin-panel');

Route::prefix('admin')->middleware(['auth','is_admin', 'auth.timeout'])->name('admin.')->group(function (){
//    Route::get('/admin-panel', [UserController::class, 'admin']);
    Route::get('results/category/{id}', [ResultController::class, 'category'])->name('results.category');
    Route::resource('/users', UserController::class);
    Route::resource('/teams',TeamController::class);
    Route::resource('/results', ResultController::class);
});

//Route::get('pdf/preview', [PDFController::class, 'preview'])->name('pdf.preview');
//Route::get('pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');


//Route::get('/home', 'HomeController@index')->name('home');
