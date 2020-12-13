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

Route::resource('projects','ProjectController')->names('projects')->parameters(['project']);

/* Route::get('/projects', 'ProjectController@index')->name('projects.index');
Route::get('/projects/create', 'ProjectController@create')->name('projects.create');
Route::get('/projects/{project}/edit', 'ProjectController@edit')->name('projects.edit');
Route::patch('/projects/{project}', 'ProjectController@update')->name('projects.update');
Route::post('/projects', 'ProjectController@store')->name('projects.store');
Route::get('/projects/{project}', 'ProjectController@show')->name('projects.show');


Route::delete('/projects/{project}', 'ProjectController@destroy')->name('projects.destroy');*/


/* form contact */
Route::post('contact','MessageController@store')->name('message.store');



Auth::routes(['register' => false]);




