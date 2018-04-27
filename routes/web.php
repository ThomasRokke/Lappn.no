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
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@getDashboard')->name('home');
Route::post('/home', 'HomeController@postDashboard')->name('postHome');


Route::get('/formtest', function(){
    return view('formtest');
});


Route::get('/introquiz', function(){
   return view('introquiz');
})->name('introquiz');

Route::get('/introq', function(){
    return view('fullquiz');
})->name('introq');
Route::get('/quiz', 'QuizController@getQuiz')->name('fullquiz');
Route::get('/quiz-finished', 'QuizController@postQuiz')->name('postQuiz');


Route::get('/myquiz', 'QuizController@getTries')->name('myquiz');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

