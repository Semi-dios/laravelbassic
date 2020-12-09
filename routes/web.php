<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    $name = 'sERGIO';
        return view('home', compact('name'));
})->name('home'); */




Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');



Route::get('/projects', 'ProjectController@index')->name('projects.index');
Route::get('/projects/create', 'ProjectController@create')->name('projects.create');

Route::get('/projects/{project}', 'ProjectController@show')->name('projects.show');
Route::post('/projects', 'ProjectController@store')->name('projects.store');



/* form contact */
Route::post('contact','MessageController@store')->name('message.store');


